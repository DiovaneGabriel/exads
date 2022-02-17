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
}
