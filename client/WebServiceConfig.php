<?php
/**
 * Created by JetBrains PhpStorm.
 * User: root
 * Date: 5/22/12
 * Time: 3:44 PM
 * To change this template use File | Settings | File Templates.
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
