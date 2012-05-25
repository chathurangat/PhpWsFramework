<?php

include("WsServerImpl.php");


$wsServer =  new WsServerImpl();

$data  = $wsServer->getIncomingDataFromClientRequest();

echo $data;


?>
