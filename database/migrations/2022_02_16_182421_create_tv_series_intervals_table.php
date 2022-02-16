<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tv_series_intervals', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tv_series')->nullable(false);
            $table->tinyInteger('week_day')->nullable(false);
            $table->time('show_time')->nullable(false);
            $table->timestamps();

            $table->foreign('id_tv_series')->references('id')->on('tv_series')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tv_series_intervals');
    }
};
