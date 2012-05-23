<?php
/*
 * chathuranga tennakoon
 * chathuranga.t@gmail.com
 * http://chathurangat.blogspot.com
 * http://lk.linkedin.com/in/chathurangatennakoon
 * https://github.com/chathurangat
 */

class WebServiceConfig
{

    private $serviceUrl;
    private $contentType;
    private $RequestMethod;
    private $dataInRequest;


    public function setRequestMethod($RequestMethod)
    {
        $this->RequestMethod = $RequestMethod;
    }

    public function getRequestMethod()
    {
        return $this->RequestMethod;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setDataInRequest(array $dataInRequest)
    {
        $this->dataInRequest = $dataInRequest;
    }

    public function getDataInRequest()
    {
        return $this->dataInRequest;
    }

    public function setServiceUrl($serviceUrl)
    {
        $this->serviceUrl = $serviceUrl;
    }

    public function getServiceUrl()
    {
        return $this->serviceUrl;
    }
}
