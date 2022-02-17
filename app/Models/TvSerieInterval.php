<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSerieInterval extends Model {
    protected $table = 'tv_series_intervals';
    use HasFactory;
    public function tvSerie() {
        return $this->belongsTo(TvSerie::class, "id_tv_series", "id");
    }
    public static function whereTitle($title) {
        $tvSerie = TvSerie::where("title", "LIKE", "%$title%")->get()->pluck('id')->toArray();
        return TvSerieInterval::whereIn("id_tv_series", $tvSerie);
    }
    public static function sortByDate($date) {
        $week_day = date("w", strtotime($date)) + 1;
        $time = date("H:i", strtotime($date));
        return TvSerieInterval::orderByRaw("if(abs(week_day - $week_day)=0,if(subtime(show_time ,'$time')<0,7,0),abs(week_day - $week_day))");
    }
}
