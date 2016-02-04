<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once('BD_Proxy.php');
        require_once('DB.php');

       $uri = "http://localhost/tienda_wdsl/TiendaOnlineOO/tienda/include";
      // $url = "$uri/servicio.php";

        // $cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));
       $cliente = new SoapClient("$uri/BD_Proxy.wsdl");

        //$producto = $cliente->obtieneProducto("3DSNG"); //lo hace bien
        //$otro_precio=$producto->getPVP(); //no funciona por no soportar el serv esta clase.


        $precio = $cliente->obtienePrecioProducto("3DSNG"); //correcto
        echo ("precio " + $precio); // funciona correctamente.


        //echo ("precio de producto " + $otro_precio);
        ?>
    </body>
</html>
