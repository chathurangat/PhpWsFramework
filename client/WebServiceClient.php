<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 5/22/12
 * Time: 3:48 PM
 * To change this template use File | Settings | File Templates.
 */
//include("WebServiceConfig.php");


interface WebServiceClient
{

public function callJsonWebServiceAndRetrieveData(WebServiceConfig $wsConfig);

}//WebServiceClient
