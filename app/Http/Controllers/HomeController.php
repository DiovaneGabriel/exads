<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TvSerie;
use App\Models\TvSerieInterval;

class HomeController extends Controller {
    public function index() {
        return view('home');
    }
    public function prime_numbers() {

        //generate 4 columns with 25 numbers each

        $numbers = [];
        for ($i = 0; $i <= 3; $i++) {
            for ($j = 1; $j <= 25; $j++) {
                $n = $j + (25 * $i);
                $numbers[$i][] = (object)[
                    "number" => $n,
                    "prime" => is_prime($n)
                ];
            }
        }
        $data['numbers'] = $numbers;
        return view('prime-numbers', $data);
    }
    public function ascii_array() {

        //generate and shuffle characters
        $characters = [];
        for ($i = ord(","); $i <= ord("|"); $i++) {
            $characters[] = chr($i);
        }
        shuffle($characters);
        $data['before_array'] = $characters;

        //remove a random character
        $remove_char = chr(random_int(ord(","), ord("|")));
        $remove_key = array_search($remove_char, $characters);
        unset($characters[$remove_key]);
        $data['after_array'] = $characters;

        //determine which character was removed
        $removed = false;
        for ($i = ord(","); $i <= ord("|") && !$removed; $i++) {
            $c = chr($i);
            if (!in_array($c, $characters)) {
                $removed = $c;
            }
        }
        $data['removed_character'] = $removed;

        return view('ascii-array', $data);
    }

    public function tv_series() {

        $serie = TvSerie::find(1);

        dd($serie->intervals());

        return view('tv-series');
    }
}
