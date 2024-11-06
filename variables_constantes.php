<?php
$var = "Hola";
define("SALUDO", "Hola Mundo");

echo "Variable: $var (Tipo: " . gettype($var) . ")\n";
echo "Constante: " . SALUDO . " (Tipo: " . gettype(SALUDO) . ")\n";

?>
