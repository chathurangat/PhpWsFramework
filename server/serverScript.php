<?php
/*
 * chathuranga tennakoon
 * chathuranga.t@gmail.com
 * http://chathurangat.blogspot.com
 * http://lk.linkedin.com/in/chathurangatennakoon
 * https://github.com/chathurangat
 */

/* this page is developed to show a  demonstration on how to receive the web service request */

$request_method =  $_SERVER['REQUEST_METHOD'];



switch($request_method){


    //json post
    case 'POST':

        $json_object = file_get_contents('php://input');


        //printing the decode jon array
        $result_array = json_decode($json_object,true);

        $result_array["request_method"] = "POST";
        $result_array["content_type"] = "json";

        $json_result = json_encode($result_array);

        echo  $json_result;
        break;



    //json get
    case 'GET':

        $json_object = file_get_contents('php://input');

        //printing the decode jon array
        $result_array = json_decode($json_object,true);

        $result_array["request_method"] = "GET";
        $result_array["content_type"] = "json";

        $json_result = json_encode($result_array);

        echo  $json_result;

        break;



    /*
        case 'POST':

            //$received = print_r($_POST,true);

            $received = file_get_contents('php://input');

            $result_array["request_method"] = "POST".$received;
            $result_array["content_type"] = "xml";

            $json_result = json_encode($result_array);

            echo $json_result;

            break;


        case 'GET':

            $received = file_get_contents('php://input');

            $result_array["request_method"] = "GET" .$received;
            $result_array["content_type"] = "xml";

            $json_result = json_encode($result_array);

            echo $json_result;

            break;
    */

}


?>
