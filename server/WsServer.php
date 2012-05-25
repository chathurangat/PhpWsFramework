<?php
/*
 * chathuranga tennakoon
 * chathuranga.t@gmail.com
 * http://chathurangat.blogspot.com
 * http://lk.linkedin.com/in/chathurangatennakoon
 * https://github.com/chathurangat
 */
interface WsServer
{

   public function getIncomingDataFromClientRequest();

   public function sendResponseForClientRequest();

}
