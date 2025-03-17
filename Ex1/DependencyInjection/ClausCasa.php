<?php

class ClausCasa {
    private  bool $agafada = false;

    public function agafarClausCasa(): void {
        $this->agafada = true;
    }

    public function comprovarClausCasa(): bool {
        return $this->agafada;
    }
}