<?php
namespace App;

class User {
    public function sayHello() {
        echo "Hello from User class\n";
    }
}

// Autoload function
spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$user = new \App\User();
$user->sayHello(); // Ausgabe: Hello from User class
?>