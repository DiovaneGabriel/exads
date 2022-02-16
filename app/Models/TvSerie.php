<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSerie extends Model {
    use HasFactory;
    public function intervals() {
        // return $this->hasMany(TvSerieInterval::class, "id", "id_tv_series");
        return TvSerieInterval::whereIdTvSeries($this->id)->get();
    }
}
