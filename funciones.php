<?php
// Declaración de función
function suma($a, $b = 5) { // Parámetro por defecto
    return $a + $b;
}

$resultado = suma(10);
echo $resultado; // Salida: 15

// Parámetros por referencia
function agregar(&$array) {
    array_push($array, "nuevo valor");
}
$arr = [];
agregar($arr);
print_r($arr); // Salida: ['nuevo valor']
?>
