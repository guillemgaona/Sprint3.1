<?php
class TargetaMetro {
    private  bool $agafada = false;

    public function agafarTargetaMetro(): void {
        $this->agafada = true;
    }

    public function comprovarTargetaMetro(): bool {
        return $this->agafada;
    }
}