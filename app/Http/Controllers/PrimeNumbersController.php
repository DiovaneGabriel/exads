<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PrimeNumbersController extends Controller {
    public function index() {

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
}
