<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create(['category_name' => 'Acción']);
        Categorie::create(['category_name' => 'Aventura']);
        Categorie::create(['category_name' => 'Anime']);
        Categorie::create(['category_name' => 'Ciencia fición']);
        Categorie::create(['category_name' => 'Romance']);
        Categorie::create(['category_name' => 'Terror']);
    }
}
