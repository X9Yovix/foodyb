<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $req){
        $user = new User();
        $user->cin = $req->input('cin');
        $user->carte_sejour = $req->input('carte_sejour');
        $user->first_name = $req->input('first_name');
        $user->last_name = $req->input('last_name');
        $user->picture = $req->input('picture');
        $user->date_of_birth = $req->input('date_of_birth');
        $user->adresse = $req->input('adresse');
        $user->phone_number = $req->input('phone_number');
        $user->email = $req->input('email');
        $user->password = Hash::make( $req->input('password') );
        $user->save();
        return $user;
        //return "ok";
    }

    public function login(Request $req){
        $user = User::where('email',$req->email)->first();
        //kan user faregh  wala pass ghalet
        if(!$user || !Hash::check($req->password,$user->password)){
            return ["error"=>"Email or pass ghalet"];
        }
        return $user;
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
