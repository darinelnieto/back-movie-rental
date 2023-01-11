<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Create
    public function create(Request $request){
        $request->validate([
            'name'                   => 'required',
            'surname'                => 'required',
            'identification_number'  => 'required'
         ]);
         $customer = new Customer();
         $customer->name = $request->name;
         $customer->surname = $request->surname;
         $customer->identification_number = $request->identification_number;
         $customer->description = $request->description;
         $customer->save();
    }
    // show customer
    public function read(){
        $customer = Customer::all();
        return $customer;
    }
    // Get customer
    public function getCustomer(Request $request){
        $customer = Customer::find($request->id);
        return $customer;
    }
    // Update customer
    public function update(Request $request){
        $customer = Customer::find($request->id);
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->identification_number = $request->identification_number;
        $customer->description = $request->description;
        $customer->save();
    }
    // Delete customer
    public function delete(Request $request){
        Customer::find($request->id)->delete();
    }
}
