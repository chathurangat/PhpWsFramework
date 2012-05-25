<?php


include("client/WebServiceClientImpl.php");
include("client/WebServiceConfig.php");
include ("utility/WsUtil.php");


//echo "<H3>RestFul WebService Library for PHP</H3><br/>";


$initial_data = array('name'=>'chathuranga');

//instantiating the WebServiceConfiguration object
$wsConfig = new WebServiceConfig();
$wsConfig->setContentType(ContentType::JSON);
$wsConfig->setDataInRequest($initial_data);
//$wsConfig->setServiceUrl("http://localhost/PhpWsFramework/server/serverScript.php");
$wsConfig->setServiceUrl("http://localhost/PhpWsFramework/server/serverTest.php");
$wsConfig->setRequestMethod(RequestMethod::HTTP_POST);



//calling the web service
$wsClient = new WebServiceClientImpl();
$retrieved_arr = $wsClient->callJsonWebServiceAndRetrieveData($wsConfig);

echo "size of retrieved data [".sizeof($retrieved_arr)."]<br>";

print_r($retrieved_arr);



?>
