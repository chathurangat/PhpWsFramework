<?php

include("client/WebServiceClientImpl.php");
include("client/WebServiceConfig.php");


echo "<H3>RestFul WebService Library for PHP</H3><br/>";


$initial_data = array('chathuranga'=>'darshana chathuranga');

//instantiating the WebServiceConfiguration object

$wsConfig = new WebServiceConfig();

$wsConfig->setContentType("json");
$wsConfig->setDataInRequest($initial_data);
$wsConfig->setServiceUrl("http://localhost/PhpWsFramework/server/serverScript.php");
$wsConfig->setRequestMethod("POST");


$wsClient = new WebServiceClientImpl();

$retrieved_arr = $wsClient->callJsonWebServiceAndRetrieveData($wsConfig);


echo "size of retrieved data [".sizeof($retrieved_arr)."]<br>";

print_r($retrieved_arr);


?>
