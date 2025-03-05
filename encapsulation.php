<?php
class Counter {
    private $counter;

    public function __construct() {
        $this->counter = 0;
    }

    public function increment() {
        $this->counter++;
    }

    public function decrement() {
        if ($this->counter > 0) {
        $this->counter--;
        }
    }

    public function getValue() {
        return $this->counter;
    }
}

$number = new Counter();
$number->decrement();

echo $number->getValue();




