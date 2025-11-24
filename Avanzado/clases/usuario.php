<?php 
class Usuario {
    private $nombre;
    private $apellido;
    protected $fecha;

    function __construct($nom, $ape, $fec)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fecha = new DateTime($fec);
    }

    public function imprime_caracteristicas() {
        echo "<p>Nombre: $this->nombre  </p>";
        echo "<p>Apellido: $this->apellido </p>";
    }
    public function calcular_edad() {
        $fechaActual = new DateTime();
        $diferencia = $fechaActual->diff($this->fecha);
       
        return $diferencia->y;
    }
}

?>