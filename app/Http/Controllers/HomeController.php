<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index() {
        return view('home');
    }
    public function prime_numbers() {
        $numbers = [];
        for ($i = 1; $i <= 100; $i++) {
            $numbers[] = $i . (is_prime($i) ? " [PRIME]" : "");
        }
        dump($numbers);
    }
    public function ascii_array() {

        //generate and shuffle characters
        $characters = [];
        for ($i = ord(","); $i <= ord("|"); $i++) {
            $characters[] = chr($i);
        }
        shuffle($characters);
        dump(implode($characters));

        //remove a random character
        $remove_char = chr(random_int(ord(","), ord("|")));
        foreach ($characters as $k => $v) {
            if ($remove_char === $v) {
                unset($characters[$k]);
            }
        }
        dump(implode($characters));

        //determine which character was removed
        $removed = false;
        for ($i = ord(","); $i <= ord("|") && !$removed; $i++) {
            $c = chr($i);
            if (!in_array($c, $characters)) {
                $removed = $c;
            }
        }

        dump("The character \"" . $removed . "\" was removed.");
    }
}
