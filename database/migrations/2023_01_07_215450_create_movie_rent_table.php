<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieRentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_rent', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movie_id')->constrained('movies')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('rent_id')->constrained('rents')
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
        Schema::dropIfExists('movie_rent');
    }
}
