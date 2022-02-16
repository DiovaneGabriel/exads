<?php

namespace Database\Seeders;

use App\Models\TvSerie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TvSerieSeeder extends Seeder {

    public function run() {
        DB::table('tv_series')->delete();

        TvSerie::create(array('id' => 1, 'title' => 'Game of Thrones', 'channel' => 'HBO', 'gender' => 'action adventure drama fantasy'));
        TvSerie::create(array('id' => 2, 'title' => 'Breaking Bad', 'channel' => 'AMC', 'gender' => 'crime drama thriller'));
        TvSerie::create(array('id' => 3, 'title' => 'Westworld', 'channel' => 'HBO', 'gender' => 'drama mystery sci-fi'));
        TvSerie::create(array('id' => 4, 'title' => 'The Walking Dead', 'channel' => 'AMC', 'gender' => 'drama horror thriller'));
        TvSerie::create(array('id' => 5, 'title' => 'This Is Us', 'channel' => 'FOX', 'gender' => 'comedy drama romance'));
        TvSerie::create(array('id' => 6, 'title' => 'Vikings', 'channel' => 'AMC', 'gender' => 'action adventure drama'));
        TvSerie::create(array('id' => 7, 'title' => 'The Kominsky Method', 'channel' => 'FOX', 'gender' => 'comedy drama'));
    }
}
