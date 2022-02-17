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
        $date = date("Y-m-d H:i", strtotime($date));
        $week_day = date("w", strtotime($date)) + 1;
        $order_by = "concat(DATE_ADD(date('$date'), INTERVAL abs($week_day-if(week_day < $week_day,week_day + 7,week_day)) DAY),' ',show_time)";
        return TvSerieInterval::orderByRaw("'$date' > $order_by")->orderByRaw($order_by);
    }
}
