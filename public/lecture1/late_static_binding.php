<?php
class ParentClass {
    public static function who() {
        echo __CLASS__ . "\n";
    }

    public static function test() {
        static::who(); // Late static binding
    }
}

class ChildClass extends ParentClass {
    public static function who() {
        echo __CLASS__ . "\n";
    }
}

ParentClass::test(); // Ausgabe: ParentClass
ChildClass::test(); // Ausgabe: ChildClass
?>