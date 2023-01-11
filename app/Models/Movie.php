<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    // relations categories
    public function categories(){
        return $this->belongsToMany('App\Models\Categorie')->withTimestamps();
    }
    // relations year
    public function years(){
        return $this->belongsToMany('App\Models\Year')->withTimestamps();
    }
    // relations rent
    public function rents(){
        return $this->belongsToMany('App\Models\Rent')->withTimestamps();
    }
}
