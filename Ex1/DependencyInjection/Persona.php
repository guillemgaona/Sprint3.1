<?php
require_once('Cartera.php');
require_once('ClausCasa.php');
require_once('ClausCotxe.php');
require_once('TargetaMetro.php');

class Persona {
    private Cartera $cartera;
    private ClausCasa $clausCasa;
    private ClausCotxe $clausCotxe;
    private TargetaMetro $targetaMetro;

    public function __construct(Cartera $cartera, ClausCasa $clausCasa, ClausCotxe $clausCotxe, TargetaMetro $targetaMetro) {
        $this->cartera = $cartera;
        $this->clausCasa = $clausCasa;
        $this->clausCotxe = $clausCotxe;
        $this->targetaMetro = $targetaMetro;
    }

    public function agafarCartera():void {
        $this->cartera->agafarCartera();
    }
    
    public function agafarClausCasa():void {
        $this->clausCasa->agafarClausCasa();
    }

    public function agafarClausCotxe():void {
        $this->clausCotxe->agafarClausCotxe();
    }

    public function agafarTargetaMetro():void {
        $this->targetaMetro->agafarTargetaMetro();
    }

    public function agafartot():void {
        $this->cartera->agafarCartera();
        $this->clausCasa->agafarClausCasa();
        $this->clausCotxe->agafarClausCotxe();
        $this->targetaMetro->agafarTargetaMetro();
    }

    public function sortirCasa(): string {
        if(!$this->cartera->comprovarCartera() || !$this->clausCasa->comprovarClausCasa() || !$this->clausCotxe->comprovarClausCotxe() || !$this->targetaMetro->comprovarTargetaMetro()) {
            return "Segur que no et falta quelcom?";
        } else {
            return "Ho tens tot, pots sortir.";
        }
    }
}