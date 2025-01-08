<?php
class Mailer {
    public function send($message) {
        echo "Sending: $message\n";
    }
}

class Notification {
    private $mailer;

    public function __construct(Mailer $mailer) {
        $this->mailer = $mailer;
    }

    public function sendNotification($message) {
        $this->mailer->send($message);
    }
}

$mailer = new Mailer();
$notification = new Notification($mailer);
$notification->sendNotification("Hello, World!");
// Ausgabe: Sending: Hello, World!
?>