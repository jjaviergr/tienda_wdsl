<?php

require_once('include/DB.php');

$uri="http://tienda_wdsl/tienda_wsdl/TiendaOnlineOO/tienda/servicio_con_wdsl.php";

$server = new SoapServer(null, array('uri'=>''));



$server->setClass('BD');
$server->handle();


?>
