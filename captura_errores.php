<?php
try {
    throw new Exception("Error!");
} catch (Exception $e) {
    echo "Capturado: " . $e->getMessage();
}
?>