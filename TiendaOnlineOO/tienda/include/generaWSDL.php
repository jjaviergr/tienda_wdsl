<?php

require_once("DB.php");
// Ruta a WSDLDocument
require_once("WSDLDocument.php");

$uri = "http://localhost/tienda_wsdl/TiendaOnlineOO/tienda/soap_con_wsdl/include";
$url = "$uri/servicio.php";
$wsdl = new WSDLDocument("BD",$url,$uri); 
echo $wsdl->saveXml();
?>
