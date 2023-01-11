<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    // relations movie
    public function movies(){
        return $this->belongsToMany('App\Models\Movie')->withTimestamps();
    }
    // relations customer
    public function customers(){
        return $this->belongsToMany('App\Models\Customer')->withTimestamps();
    }
}
