<?php

class ClausCotxe {
    private  bool $agafada = false;

    public function agafarClausCotxe():void {
        $this->agafada = true;
    }

    public function comprovarClausCotxe(): bool {
        return $this->agafada;
    }
}