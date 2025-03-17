<?php
    
class Cartera {
    private  bool $agafada = false;

    public function agafarCartera(): void {
        $this->agafada = true;
    }

    public function comprovarCartera(): bool {
        return $this->agafada;
    }
}