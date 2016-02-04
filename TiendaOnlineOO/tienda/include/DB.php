<?php
require_once('Producto.php');

/**
 * 
 */
class BD { 
    /**
     * 
     * @param string $sql
     * @return PDO
     */
        public static function ejecutaConsulta($sql) {
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $dsn = "mysql:host=localhost;dbname=dwes";
        $usuario = 'dwes';
        $contrasena = 'abc123.';
        
        $dwes = new PDO($dsn, $usuario, $contrasena, $opc);
        $resultado = null;
        if (isset($dwes)) $resultado = $dwes->query($sql);
        return $resultado;
    }
    
    
/**
 * 
 * @return \Producto
 */
    public static function obtieneProductos() {
        $sql = "SELECT cod, nombre_corto, nombre, PVP FROM producto;";
        $resultado = self::ejecutaConsulta ($sql);
        $productos = array();

	if($resultado) {
            // Añadimos un elemento por cada producto obtenido
            $row = $resultado->fetch();
            while ($row != null) {
                $productos[] = new Producto($row);
                $row = $resultado->fetch();
            }
	}
        
        return $productos;
    }

    /**
     * 
     * @param string $codigo
     * @return Producto array of Producto Class
     */
    public static function obtieneProducto($codigo) {
        $sql = "SELECT cod, nombre_corto, nombre, PVP FROM producto";
        $sql .= " WHERE cod='" . $codigo . "'";
        $resultado = self::ejecutaConsulta ($sql);
        $producto = null;

	if(isset($resultado)) {
            $row = $resultado->fetch();
            $producto = new Producto($row);
	}
        
        return $producto;    
    }
    
    
    /**
     * 
     * @param string $codigo
     * @return producto
     */
    public static function obtienePrecioProducto($codigo)
    {
        $producto=BD::obtieneProducto($codigo);
        return $producto->getPVP();
    }
    
    /**
     * 
     * @param string $nombre
     * @param String $contrasena
     * @return boolean
     */
    public static function verificaCliente($nombre, $contrasena) {
        $sql = "SELECT usuario FROM usuarios ";
        $sql .= "WHERE usuario='$nombre' ";
        $sql .= "AND contrasena='" . md5($contrasena) . "';";
        $resultado = self::ejecutaConsulta ($sql);
        $verificado = false;

        if(isset($resultado)) {
            $fila = $resultado->fetch();
            if($fila !== false) $verificado=true;
        }
        return $verificado;
    }
    
}

?>
