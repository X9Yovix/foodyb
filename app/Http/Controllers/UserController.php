<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function register(Request $req){
        $user = new User();
        $user->id_card = $req->input('id_card');
        $user->first_name = $req->input('first_name');
        $user->last_name = $req->input('last_name');
		$user->picture = $req->file('picture')->store('users', ['disk' => 'public']);
		$user->date_of_birth =Carbon::createFromFormat('m/d/Y', $req->input('date_of_birth'))->format('Y-m-d');
        $user->adresse = $req->input('adresse');
        $user->phone_number = $req->input('phone_number');
        $user->email = $req->input('email');
		//$user->password = $req->input('password');
        $user->password = Hash::make( $req->input('password') );
        $user->owner = $req->input('owner');
        $user->save();
		//return response()->('message' => 'Success');
        return $user;
        //return "ok";
    }

    public function login(Request $req){
        $user = User::where('email',$req->email)->first();
        //kan user faregh  wala pass ghalet
        if(!$user || !Hash::check($req->password,$user->password)){
            return response()->json(['error' => 'Email/Password is incorrect']);
        }else{
			return $user;
		}
        
    }
	
	public function userInfo($id)
    {
        return User::where('id',$id)->get();
    }
	
	public function allUser()
    {
        return User::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
