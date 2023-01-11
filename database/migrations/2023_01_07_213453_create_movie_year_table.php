<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieYearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_year', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('year_id')->constrained('years')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_year');
    }
}
