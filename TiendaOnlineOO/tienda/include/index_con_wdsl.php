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
    

        // $cliente = new SoapClient(null, array('location' => $url, 'uri' => $uri));
       $cliente = new SoapClient("$uri/BD_Proxy.wsdl");

       
   

        $precio = $cliente->obtienePrecioProducto("3DSNG"); //correcto
        echo ("precio " + $precio); // funciona correctamente.


     
        ?>
    </body>
</html>
