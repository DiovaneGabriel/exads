<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TvSerie;
use App\Models\TvSerieInterval;
use Illuminate\Http\Request;

class TVSeriesController extends Controller {

    public function index(Request $request) {

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
