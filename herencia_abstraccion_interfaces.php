<?php
interface MiInterface {
    public function metodoInterface();
}

abstract class MiClaseAbstracta {
    abstract protected function metodoAbstracto();
}

class Implementacion extends MiClaseAbstracta implements MiInterface {
    public function metodoInterface() {
        return "Implementado en interfaz.";
    }

    protected function metodoAbstracto() {
        return "Implementado en clase abstracta.";
    }
}
?>
