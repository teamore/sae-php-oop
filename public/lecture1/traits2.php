<?php
trait Flyable {
    public function fly() {
        echo __CLASS__. ": I can fly!\n";
    }
}
trait Tweetable {
    public function tweet() {
        echo __CLASS__. ": I can tweet!\n";
    }
}
class Animal {
    public function __call($name, $arguments) {
        echo __CLASS__. ": I cannot ".$name."\n";
    }
}
class Bird extends Animal {
    use Flyable, Tweetable;
}
class Bug extends Animal {
    use Flyable;
}
$bug = new Bug();
$bug->fly();
$bug->tweet();

$bird = new Bird();
$bird->fly();
$bird->tweet();