<?php 
class Basededatos {
    private $conexion;

    function __construct($servidor, $usuario, $password, $baseNombre){
        $this->conexion = new mysqli($servidor, $usuario, $password, $baseNombre);
    }

    public function ejecutarConsultas($codigo){
        $tipo = substr($codigo, 0,6);

        switch ($tipo) {
            case 'INSERT':
            case 'UPDATE':
            case 'DELETE':
                $resultado = $this->conexion->query($codigo);
                break;
            case 'SELECT':
                $resultado = $this->conexion->query($codigo);
                 while ($listar = $resultado->fetch_assoc()) {
                    $mostrar[] = $listar;
                 }
                 return $mostrar;
                 break;
        }   
   }

}
?>
