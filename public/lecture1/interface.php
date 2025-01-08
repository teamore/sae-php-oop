<?php
interface Logger {
    public function log(string $message);
}

class FileLogger implements Logger {
    public function log(string $message) {
        echo "Logging to a file: $message\n";
    }
}

class DatabaseLogger implements Logger {
    public function log(string $message) {
        echo "Logging to the database: $message\n";
    }
}

$logger = new FileLogger();
$logger->log("This is a log message.");
// Ausgabe: Logging to a file: This is a log message.
?>