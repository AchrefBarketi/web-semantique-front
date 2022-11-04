<?php

namespace App\Http\Controllers;

use App\Models\Velo;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;

class veloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $response = Http::get("http://localhost:8030/ws/subclass/all/Bike");

        $subClass = json_decode($response);

        $Types = [];

        foreach ($subClass as $sub) {

            $type = substr($sub->subClass->value, 59);

            array_push($Types, $type);
        }

        return view('bike-rental', compact('Types'));
    }


    public function getAllByType($Type)
    {

        $response = Http::get("http://localhost:8030/ws/bikes/all/$Type");

        $Types = json_decode($response);


        return view('rent-bike', compact('Types'));
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
     * @param  string  $type
     * @param  string  $title
     * @return \Illuminate\Http\Response
     */
    public function show($type, $title)
    {
        $response = Http::get("http://localhost:8030/ws/bikes/all/$type/$title");

        $Event = json_decode($response);

        //dd($Balade);


        return view('single-event', compact('Event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $velo = Velo::find($id);
        $velo->status = "reserved";
        $velo->save();
        return redirect('/bike-rental');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
