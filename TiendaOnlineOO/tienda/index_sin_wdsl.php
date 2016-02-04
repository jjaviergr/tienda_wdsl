<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once('include/Producto.php');
        
         $uri = "http://localhost/tienda_soap_ejemplo_basico-master/TiendaOnlineOO/tienda";
         $url = "$uri/servicio_sin_wdsl.php";
        
        $cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));

        $producto = $cliente->obtieneProducto("3DSNG"); //lo hace bien
         $otro_precio=$producto->getPVP(); //no funciona por no soportar el serv esta clase.
         
         
        $precio = $cliente->obtienePrecioProducto("3DSNG"); //correcto
        echo ("precio " + $precio); // funciona correctamente.
        
       
        echo ("precio de producto "+$otro_precio);
        ?>
    </body>
</html>
