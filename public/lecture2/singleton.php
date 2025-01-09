<?php
class Singleton {
    private static $instance;

    private function __construct() {
        // Private constructor to prevent direct instantiation
    }
    public function scream() {
        echo "scream!\n";
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

$instance1 = Singleton::getInstance();
$instance2 = Singleton::getInstance();
$instance1->scream();
$instance2->scream();

var_dump($instance1 === $instance2); // Ausgabe: bool(true)
?>