<?php
require_once("Producto.php");
require_once("DB.php");
// Ruta a WSDLDocument
require_once("WSDLDocument.php");

$uri = "http://tienda_wdsl/TiendaOnlineOO/tienda/include";
$url = "$uri/servicio.php";
$wsdl = new WSDLDocument("Producto",$url,$uri); 
echo $wsdl->saveXml();
?>
