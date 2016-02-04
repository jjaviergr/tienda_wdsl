<?php
require_once('BD_Proxy.php');
//require_once 'BD_Proxy.php';

$uri="http://localhost/tienda_wdsl/TiendaOnlineOO/tienda/include";

//$server = new SoapServer(null, array('uri'=>''));
$server = new SoapServer("$uri/BD_Proxy.wsdl");

$server->setClass('BD_Proxy');
$server->handle();

//function suma($a,$b){ return $a+$b; }
//function resta($a,$b){ return $a-$b; }

//$server->addFunction("suma");
//$server->addFunction("resta");
//$server->handle();
?>
