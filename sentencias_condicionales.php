<?php
$numero = 10;

// if-else
if ($numero < 10) {
    echo "Menor que 10";
} else {
    echo "Mayor o igual que 10";
}

// switch
$color = "rojo";
switch ($color) {
    case "rojo":
        echo "El color es rojo";
        break;
    case "verde":
        echo "El color es verde";
        break;
    default:
        echo "Color desconocido";
}

// Operador ternario
$resultado = ($numero > 10) ? "Mayor que 10" : "No mayor que 10";

// Null coalesce
$nuevo_variable = $variable ?? "valor por defecto"; // si $variable es null
?>