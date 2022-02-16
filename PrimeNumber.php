<?php

class PrimeNumbers {
    private $numbers;
    function __construct() {
        for ($i = 1; $i <= 100; $i++) {
            $this->numbers[] = $i;
        }
    }
    public function run() {
        foreach ($this->numbers as $n) {
            print($n);
            print($this->is_prime($n) ? " [PRIME]" : "");
            print(PHP_EOL);
        }
    }
    private function is_prime($n) {
        if ($n <= 1) {
            return false;
        }

        for ($i = 2; $i <= $n / 2; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }
}
