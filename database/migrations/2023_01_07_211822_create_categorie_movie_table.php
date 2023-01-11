<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorieMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->constrained('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreignId('movie_id')->constrained('movies')
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
        Schema::dropIfExists('categorie_movie');
    }
}
