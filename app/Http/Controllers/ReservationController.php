<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function reservationUser(Request $req)
    {
        $reservation = new Reservation();
        $reservation->first_name = $req->input('first_name');
        $reservation->last_name = $req->input('last_name');
        $reservation->email = $req->input('email');
        $reservation->phone_number = $req->input('phone_number');
        //$reservation->date_reservation =Carbon::createFromFormat('d-m-Y', $req->input('date_reservation'))->format('Y-m-d');
        $reservation->date_reservation =Carbon::parse($req->input('date_reservation'))->format('Y/m/d H:i:s');
        $reservation->special_req = $req->input('special_req');
        $reservation->number_of_guests = $req->input('number_of_guests');
        $reservation->restaurant_id = $req->input('restaurant_id');
        //$user->password = $req->input('password');
        //$user->owner = $req->input('owner');
        $reservation->save();
        //return response()->('message' => 'Success');
        return $reservation;
        //return "ok";
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
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
