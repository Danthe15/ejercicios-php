<?php
class Ejemplo {
    public $publico;
    private $privado;
    protected $protegido;

    public function __construct() {
        $this->publico = "Soy público";
        $this->privado = "Soy privado";
        $this->protegido = "Soy protegido";
    }
}
?>