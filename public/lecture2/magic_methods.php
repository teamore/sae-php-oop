<?php
class User {
    private $data = [];

    public function __construct($name) {
        $this->data['name'] = $name;
        echo "User $name created\n";
    }

    public function __get($key) {
        return $this->data[$key] ?? null;
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function __destruct() {
        echo "User {$this->data['name']} deleted\n";
    }
}

$user = new User("Alice");
echo $user->name . "\n"; // Ausgabe: Alice
$user->age = 25;
echo $user->age . "\n"; // Ausgabe: 25
?>