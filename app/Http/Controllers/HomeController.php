<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TvSerie;
use App\Models\TvSerieInterval;
use Illuminate\Http\Request;

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

    public function tv_series(Request $request) {

        $search = $request->input('search');
        $date = $request->input('date');
        $time = $request->input('time');

        $date = $date ? $date : date("Y/m/d");
        $time = $time ? $time : date("H:i");

        $date_time = date("Y-m-d H:i", strtotime($date . " " . $time));
        $week_day = date("w", strtotime($date_time)) + 1;
        $order_by = "concat(DATE_ADD(date('$date_time'), INTERVAL abs($week_day-if(week_day < $week_day,week_day + 7,week_day)) DAY),' ',show_time)";

        if ($search) {
            $tvSerie = TvSerie::where("title", "LIKE", "%$search%")->get()->pluck('id')->toArray();
            $intervals = TvSerieInterval::whereIn("id_tv_series", $tvSerie)->orderByRaw("'$date_time' > $order_by")->orderByRaw($order_by);
        } else {
            $intervals = TvSerieInterval::orderByRaw("'$date_time' > $order_by")->orderByRaw($order_by);
        }

        $data['intervals'] = $intervals->get();
        $data['search'] = $search;
        $data['date'] = $date;
        $data['time'] = $time;

        return view('tv-series', $data);
    }
}
