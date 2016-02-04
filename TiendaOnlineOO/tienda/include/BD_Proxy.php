<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('Producto.php');
require_once('DB.php');
//require_once('../productos.php');


class BD_proxy
{
   /**
    * 
    * @param string $codigo
    * @return string
    */
   public function obtienePrecioProducto($codigo)
   {
       
       return (BD::obtienePrecioProducto($codigo));
   }
   
   
   
}