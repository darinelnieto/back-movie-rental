<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    // Login
    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($credentials)) {
            $user = User::where('email', '=', $request->email)->get();
            $auth = UserResource::collection($user);
            $token = Auth::user()->createToken('myapptoken')->plainTextToken;
            session()->put('token', $token);
            return response()->json( ['token' => $token, 'user' => $auth[0]]);
        }
        return response()->json("Usuario y/o contraseña inválido", 422);
    }
    public function logged(Request $request){
        $user = User::where('id', '=', $request->id)->get();
        $auth = UserResource::collection($user);
        return $auth[0];
    }
    // Read role
    public function readRole(){
        $roles = Role::all();
        return $roles;
    }
    // Create user
    public function createUser(Request $request){
        $request->validate([
            'name'       => 'required',
            'user_name'  => 'required',
            'email'      => 'required',
            'password'   => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->sync($request->role_id);
    }
    // Read user
    public function readUser(){
        $users = User::with('roles')->get();
        return $users;
    }
    // Get user -> update
    public function getUser(Request $request){
        $user = User::find($request);
        return UserResource::collection($user);
    }
    // Update users
    public function updateUser(Request $request){
        $user = User::find($request->id);
        if($request->password !== null){
            $user->name = $request->name;
            $user->user_name = $request->user_name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
        }else{
            $user->name = $request->name;
            $user->user_name = $request->user_name;
            $user->email = $request->email;
            $user->save();
        }
        DB::table('model_has_roles')->where('model_id',$request->id)->delete();
        $user->roles()->sync($request->role_id);
    }
    // Delete
    public function delete(Request $request){
        DB::table("users")->where('id',$request->id)->delete();
        DB::table('model_has_roles')->where('model_id',$request->id)->delete();
    }
}