<?php
interface Notifier {
    public function send(string $message);
}
class Mailer implements Notifier {
    public function send(string $message) {
        echo "Sending Mail: $message\n";
    }
}
class Sms implements Notifier {
    public function send(string $message) {
        echo "Sending SMS: $message\n";
    }    
}

class Notification {
    private $mailer;

    public function __construct(Notifier $mailer) {
        $this->mailer = $mailer;
    }

    public function sendNotification($message) {
        $this->mailer->send($message);
    }
}

$mailer = new Mailer();
$notification = new Notification($mailer);
$notification->sendNotification("Hello, World!");

$sms = new Sms();
$notification = new Notification($sms);
$notification->sendNotification("Hello, World!");

?>