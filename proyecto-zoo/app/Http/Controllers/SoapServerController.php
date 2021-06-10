<?php

namespace App\Http\Controllers;

use SoapServer;
use App\WebServices\WSDLDocument;
use Illuminate\Http\Request;
use App\WebServices\ZoologicoWebService;

class SoapServerController extends Controller
{
	private $class = ZoologicoWebService::class;
	private $uri = "http://proyecto-zoo/api";
	private $uriWSDL = "http://localhost/proyecto-zoo/public/api/wsdl";

   public function getServer(){
   		$server = new SoapServer($this->uriWSDL);
   		$server->setClass($this->class);
   		$server->handle();
   		exit;
   }

   public function getWSDL(){
   		$wsdl = new WSDLDocument($this->class,$this->uri);
		$wsdl->formatOutput = true;
   		header("Content-Type: text/xml");
   		echo $wsdl->saveXML();
   		exit;
   	}
}
