<?php

require_once("BD_Proxy.php");
// Ruta a WSDLDocument
require_once("WSDLDocument.php");

$uri = "http://tienda_wdsl/TiendaOnlineOO/tienda/include";
$url = "$uri/servicio.php";
$wsdl = new WSDLDocument("BD_Proxy",$url,$uri); 
echo $wsdl->saveXml();
?>
