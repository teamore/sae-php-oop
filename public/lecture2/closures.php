<?php
class Calculator {
    public function calculate($a, $b, callable $operation) {
        return $operation($a, $b);
    }
}

$calculator = new Calculator();

$addition = function ($a, $b) {
    return $a + $b;
};

echo $calculator->calculate(5, 3, $addition); // Ausgabe: 8
?>