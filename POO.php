<?php
class MiClase {
    public $atributo;
    private $atributoPrivado;

    public function __construct($valor) {
        $this->atributo = $valor;
    }

    public function metodo() {
        return $this->atributo;
    }

    public function __destruct() {
        // Código para limpiar
    }
}

$objeto = new MiClase("Hola POO");
echo $objeto->metodo();

// Herencia
class Hija extends MiClase {
    public function metodoHija() {
        return $this->atributo . " desde la hija.";
    }
}
?>
