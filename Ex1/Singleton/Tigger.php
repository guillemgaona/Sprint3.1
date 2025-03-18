<?php

class Tigger {
private static $instance = null;
private int $totalRoars= 0;

private function __construct() {
        echo "Building character..." . PHP_EOL;
}

public function roar() {
        echo "Grrr!" . PHP_EOL;
        $this->totalRoars++;
}

public static function getInstance() {
    if (self::$instance === null) {
        self::$instance = new Tigger();
    }
    return self::$instance;
}

private function __clone() {}

private function __wakeup() {}

public function getCounter(): string {
    return "Ha rugido un total de: " . $this->totalRoars;
}
}