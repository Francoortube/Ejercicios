<?php 
class Producto {
    public $baseconectada;

    function __construct($base)
    {
        $this->baseconectada = $base;
    }

    public function cargarProducto ($nombre, $descripcion, $precio){
        $this->baseconectada->ejecutarConsultas("INSERT INTO productos VALUES('','$nombre','$descripcion',$precio)");
    }

    public function listar_Producto() {
       $listarProductos = $this->baseconectada->ejecutarConsultas("SELECT * FROM productos ORDER BY nombre, descripcion, precio");
        return $listarProductos; 
    }

    public function eliminar_producto($nombre) {
        $this->baseconectada->ejecutarConsultas("DELETE FROM productos WHERE nombre = '$nombre'");
    }
}
?>
