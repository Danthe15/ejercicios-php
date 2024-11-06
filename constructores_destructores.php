<?php
class Persona {
    private $nombre;

    // Constructor
    public function __construct($nombre) {
        $this->nombre = $nombre;
        echo "Constructor: Se ha creado una persona con el nombre {$this->nombre}.<br>";
    }

    //M
    public function mostrarNombre() {
        return $this->nombre;
    }

    // Destructor
    public function __destruct() {
        echo "Destructor: La persona {$this->nombre} ha sido destruida.<br>";
    }
}

// Crear una instancia de la clase
$persona = new Persona("Juan");
// Mostrar el nombre
echo "Nombre de la persona: " . $persona->mostrarNombre() . "<br>";

// Cuando el objeto $persona salga del ámbito o se destruya, se llamará al destructor
?>