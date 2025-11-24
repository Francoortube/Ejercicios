<?php 
class Registro {
    public $baseConectada;

    function __construct($base) {
        $this->baseConectada = $base;
    } 
    
    public function crearRegistro($usu, $con) {
        $claveEncrip = password_hash($con, PASSWORD_DEFAULT); 
        $this->baseConectada->ejecutarConsultas("INSERT INTO registro (usuario, contrasenia) VALUES ('$usu', '$claveEncrip')");
    }

    public function ingresoRegistro($usu, $con) {

        $resultados = $this->baseConectada->ejecutarConsultas("SELECT contrasenia FROM registro WHERE usuario = '$usu' LIMIT 1");
        
        if (!empty($resultados)) {
        
            $forma = $resultados[0];
            $verificado = $forma['contrasenia'];
            
            if (password_verify($con, $verificado)) {
                return true;
            }
        }
        
        return false;
    }
}
?>