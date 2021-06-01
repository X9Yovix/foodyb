<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function addRestaurant(Request $req)
    {
        //return ("ok");
        $restaurant = new Restaurant();
        $restaurant->restaurant_name = $req->input('restaurant_name');
        //$restaurant-> slug = $req->input('slug');
        $restaurant->description = $req->input('description');
        $restaurant->adresse = $req->input('adresse');
        $restaurant->picture = $req->file('picture')->store('restaurant', ['disk' => 'public']);
        //$restaurant-> picture = $req->file('picture')->store('restaurants', ['disk' => 'public']);
        //$restaurant -> state = json_encode($req->input('state'));
        //$state = json_encode($req->input('state'));
        $restaurant->service = $req->input('service');
        //return $state;
        //$data = json_encode($req->input('state'));
        //$restaurant-> state = $res;

        //$restaurant-> total_reviews = $req->input('total_reviews');
        $restaurant->id_card = $req->input('id_card');
        $restaurant->save();

        return $restaurant;
    }

    public function updateRestaurant(Request $req, $key)
    {
        //return ("ok");
        //$res = Restaurant::find("id_card",$key);
        //$res = Restaurant::where("id_card","12345678")->get();
        //$res = Restaurant::where("id_card",$key)->get();
        $res = Restaurant::find($key);
        $res->restaurant_name =  $req->input('restaurant_name');
        //res -> restaurant_name = $req->input('restaurant_name');
        //$res -> slug = $req->input('slug');
        $res->description = $req->input('description');
        $res->adresse = $req->input('adresse');
        //$res -> adresse = $req->input('adresse');
        if ($req->file('picture')) {
            $res->picture->file('picture')->store('restaurant', ['disk' => 'public']);
        }
        //$res -> picture = $req->file('picture')->store('restaurant', ['disk' => 'public']);
        $res->service = $req->input('service');

        $res->save();

        return $res;
    }

    public function searchRestaurant($key)
    {
        //return Restaurant::where("restaurant_name" ,"like","%$key%")->orWhere("adresse" ,"like","%$key%")->get();
        return Restaurant::where('restaurant_name',"like","%$key%")->orWhere("adresse" ,"like","%$key%")->get();
    }

    public function getRestaurant($key)
    {
        return Restaurant::where("id", $key)->get();
    }

    public function getRestaurantIdCard($key)
    {
        return Restaurant::where("id_card", $key)->get();
    }

    public function deleteRestaurant($key)
    {
        $res = Restaurant::where("id", $key)->delete();
        if ($res) {
            return ["resultat" => "restaurant deleted"];
        } else {
            return ["resultat" => "operation failed"];
        }
    }

    public function ReceiveIt(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'NatID' => 'nullable',
            'password' => 'nullable',
            'userLevel' => 'nullable'
        ]);

        return json_encode($validatedData);
    }
    public function addRes(Request $req)
    {
        return "ok";
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
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
