<?php
class Vehiculo {
    // Definición de una constante de clase
    const TIPO = 'Automóvil';

    private $marca;

    // Constructor
    public function __construct($marca) {
        $this->marca = $marca;
    }

    // Método para mostrar información del vehículo
    public function mostrarInfo() {
        return "Tipo: " . self::TIPO . ", Marca: " . $this->marca;
    }
}

// Creando una instancia de la clase Vehiculo
$miVehiculo = new Vehiculo("Toyota");

// Mostrando la información del vehículo
echo $miVehiculo->mostrarInfo(); // Salida: Tipo: Automóvil, Marca: Toyota

// Accediendo a la constante desde el contexto de la clase
echo "<br>La constante en la clase es: " . Vehiculo::TIPO; // Salida: La constante en la clase es: Automóvil
?>