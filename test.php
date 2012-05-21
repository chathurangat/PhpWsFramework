<?php


include("client/WsClient.php");


echo "<H3>RestFul WebService Library for PHP</H3><br/>";


$wsClient = new WsClient();

$retrieved_arr = $wsClient->callXmlWebServiceAndRetrieveData();

echo "size of retrieved data [".sizeof($retrieved_arr)."]<br>";

print_r($retrieved_arr);

?>
