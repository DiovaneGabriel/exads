<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ASCIIArrayController extends Controller {
    public function index() {

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
}
