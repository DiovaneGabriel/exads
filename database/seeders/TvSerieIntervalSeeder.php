<?php

namespace Database\Seeders;

use App\Models\TvSerieInterval;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TvSerieIntervalSeeder extends Seeder {

    public function run() {
        DB::table('tv_series_intervals')->delete();

        TvSerieInterval::create(array('id_tv_series' => 1, 'week_day' => 6, 'show_time' => '22:30:00'));
        TvSerieInterval::create(array('id_tv_series' => 1, 'week_day' => 7, 'show_time' => '04:30:00'));
        TvSerieInterval::create(array('id_tv_series' => 2, 'week_day' => 7, 'show_time' => '21:00:00'));
        TvSerieInterval::create(array('id_tv_series' => 2, 'week_day' => 1, 'show_time' => '03:00:00'));
        TvSerieInterval::create(array('id_tv_series' => 3, 'week_day' => 1, 'show_time' => '22:00:00'));
        TvSerieInterval::create(array('id_tv_series' => 4, 'week_day' => 7, 'show_time' => '22:00:00'));
        TvSerieInterval::create(array('id_tv_series' => 5, 'week_day' => 1, 'show_time' => '20:00:00'));
        TvSerieInterval::create(array('id_tv_series' => 6, 'week_day' => 6, 'show_time' => '22:30:00'));
        TvSerieInterval::create(array('id_tv_series' => 7, 'week_day' => 1, 'show_time' => '21:00:00'));
    }
}
