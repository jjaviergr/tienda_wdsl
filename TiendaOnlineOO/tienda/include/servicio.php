<?php

require_once('DB.php');

$uri="http://localhost/tienda_wsdl/TiendaOnlineOO/tienda/include";

//$server = new SoapServer(null, array('uri'=>''));
$server = new SoapServer("$uri/BD.wsdl");

$server->setClass('BD');
$server->handle();

//function suma($a,$b){ return $a+$b; }
//function resta($a,$b){ return $a-$b; }

//$server->addFunction("suma");
//$server->addFunction("resta");
//$server->handle();
?>
