<?php
/*
 * chathuranga tennakoon
 * chathuranga.t@gmail.com
 * http://chathurangat.blogspot.com
 * http://lk.linkedin.com/in/chathurangatennakoon
 * https://github.com/chathurangat
 */
include ("WsServer.php");

class WsServerImpl implements WsServer
{


    public function getIncomingDataFromClientRequest(){

        $json_object = file_get_contents('php://input');

        //printing the decode jon array
        $incoming_data = json_decode($json_object,true);

        $result_array["incoming_data"]=$incoming_data;

        $result_array["request_method"] = $_SERVER['REQUEST_METHOD'];

        $json_result = json_encode($result_array);

        return  $json_result;

    }



    public function sendResponseForClientRequest()
    {

    }

}//WsServerImpl
