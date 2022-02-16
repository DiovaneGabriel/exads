<?php

class ASCIIArray {
    private $characters;
    function __construct() {
        for ($i = ord(","); $i <= ord("|"); $i++) {
            $this->characters[] = chr($i);
        }
        shuffle($this->characters);
    }
    public function run() {
        $this->print_all("Before: ");
        $this->remove();
        $this->print_all("After:  ");
        $c = $this->determine();

        print("The character \"" . $c . "\" was removed.");
    }
    private function remove() {
        $remove_char = chr(random_int(ord(","), ord("|")));
        foreach ($this->characters as $k => $v) {
            if ($remove_char === $v) {
                unset($this->characters[$k]);
            }
        }
    }
    private function determine() {
        for ($i = ord(","); $i <= ord("|"); $i++) {
            $c = chr($i);
            if (!in_array($c, $this->characters)) {
                return $c;
            }
        }
    }
    private function print_all($prepend = "") {
        print($prepend);
        foreach ($this->characters as $c) {
            print($c);
        }
        print(PHP_EOL);
    }
}
