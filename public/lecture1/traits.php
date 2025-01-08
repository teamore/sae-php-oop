<?php
trait Logger {
    public function log(string $message) {
        echo "Logging: $message\n";
    }
}

class User {
    use Logger;

    public function createUser(string $name) {
        echo "User $name created\n";
        $this->log("User $name has been created.");
    }
}

$user = new User();
$user->createUser("Alice");
// Ausgabe:
// User Alice created
// Logging: User Alice has been created.
?>