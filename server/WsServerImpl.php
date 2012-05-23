<?php
/*
 * chathuranga tennakoon
 * chathuranga.t@gmail.com
 * http://chathurangat.blogspot.com
 * http://lk.linkedin.com/in/chathurangatennakoon
 * https://github.com/chathurangat
 */
class WsServerImpl implements WsServer
{


public function getIncomingDataFromClientRequest(){

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

            return  $json_result;
            break;



        //json get
        case 'GET':

            $json_object = file_get_contents('php://input');

            //printing the decode jon array
            $result_array = json_decode($json_object,true);

            $result_array["request_method"] = "GET";
            $result_array["content_type"] = "json";

            $json_result = json_encode($result_array);

            return  $json_result;

            break;
    }

}

}
