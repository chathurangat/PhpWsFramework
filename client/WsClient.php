<?php
/**
chathuranga tennakoon
 *
 */
class WsClient
{



    public function callJsonWebServiceAndRetrieveData(){


        $initial_data = array('chathuranga'=>'darshana chathuranga');

        //convert into json object
        $json_encoded_data =json_encode($initial_data);
        // Initialize curl with the URL of localhost
        $ch = curl_init("http://localhost/PhpWsFramework/server/serverScript.php");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

        curl_setopt($ch, CURLOPT_POSTFIELDS,$json_encoded_data);
        //Tell php curl that we want the data returned to us instead of being display
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        //Execute curl and put the output in $output_json.
        $output_json = curl_exec ($ch);


        //output data is converted back to php array
        $output_array =  ((array) json_decode($output_json));

        curl_close($ch);

        return $output_array;
    }






    public function callXmlWebServiceAndRetrieveData(){


        //send data as xml

        $test_array = array (
            'bla' => 'blub',
            'foo' => 'bar',
            'another_array' => array (
                'stack' => 'overflow',
            ),
        );

        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($test_array, array ($xml, 'addChild'));
        //print $xml->asXML();

        // Initialize curl with the URL of localhost
        $ch = curl_init("http://localhost/PhpWsFramework/server/serverScript.php");
        //Tell php curl that we want the data returned to us instead of being display
        //curl_setopt($ch, CURLOPT_POSTFIELDS, array('json'=>$xml->asXML()));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml->asXML());
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));

        //Execute curl and put the output in $yahoo.
        $output = curl_exec ($ch);

        $output_array =  ((array) json_decode($output));

        //closing the crul
        curl_close($ch);


        return $output_array;

    }


}//WsClient


?>
