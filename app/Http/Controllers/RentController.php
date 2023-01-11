<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Customer;
use App\Models\Rent;
use DB;
use App\Http\Resources\RentResource;

use Illuminate\Http\Request;

class RentController extends Controller
{
    //get customer and movie
    public function getContent(){
        $movie = Movie::all();
        $customer = Customer::all();
        return ['movie' => $movie, 'customer' => $customer];
    }
    // create rente
    public function createRent(Request $request){
        $rent = new Rent();
        
        $rent->start_date = $request->start_date;
        $rent->end_date = $request->end_date;
        $rent->description = $request->description;
        $rent->save();
        $rent->movies()->sync($request->movie_id);
        $rent->customers()->sync($request->customer_id);
    }
    // show rents
    public function showRents(){
        $rents = Rent::with('customers','movies')->get();
        return $rents;
    }
    // get Rent
    public function getRent(Request $request){
        $rent = Rent::find($request);
        return RentResource::collection($rent);
    }
    // Update rent
    public function update(Request $request){
        $rent = Rent::find($request->id);
        $rent->start_date = $request->start_date;
        $rent->end_date = $request->end_date;
        $rent->description = $request->description;
        $rent->save();
    }
}
