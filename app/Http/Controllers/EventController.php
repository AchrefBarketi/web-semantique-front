<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Programme;
use App\Models\Activities;
use App\Models\association;
use App\Models\Comments;
use App\Models\User;
use Illuminate\Support\Facades\Http;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get("http://localhost:8030/ws/subclass/all/Events");

        $subClass = json_decode($response);

        $Types = [];

        foreach ($subClass as $sub) {

            $type = substr($sub->subClass->value, 59);

            array_push($Types, $type);
        }

        return view('events', compact('Types'));
    }



    public function indexMarathon()
    {

        $response = Http::get("http://localhost:8030/ws/subclass/all/Marathon");

        $subClass = json_decode($response);

        $Types = [];

        foreach ($subClass as $sub) {

            $type = substr($sub->subClass->value, 59);

            array_push($Types, $type);
        }

        return view('events', compact('Types'));
    }


    public function getAllByTypeMarathon($Type)
    {

        $response = Http::get("http://localhost:8030/ws/events/all/$Type");

        $Types = json_decode($response);


        return view('events', compact('Types'));
    }

    public function getAllByTypeGoverment($Type)
    {

        $response = Http::get("http://localhost:8030/ws/events/all/$Type");

        $Types = json_decode($response);


        return view('events', compact('Types'));
    }

    public function getAllByTypePrivate($Type)
    {

        $response = Http::get("http://localhost:8030/ws/events/all/$Type");

        $Types = json_decode($response);


        return view('events', compact('Types'));
    }


    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public static function associationName($id)
    // {
    //     //$programmes = Programme::get();

    //     $association = association::find($id);

    //     //$activities = Activities::get();
    //     return $association->name;
    // }




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
        $response = Http::get("http://localhost:8030/ws/events/all/$type/$title");

        $Event = json_decode($response);

        //dd($Balade);


        return view('single-event', compact('Event'));
    }


            /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function userName($id)
    {
        $user = User::find($id);
        return $user->name;
    }


                /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function userPic($id)
    {
        $user = User::find($id);
        return $user->picture;
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



        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexFilter(Request $request)
    {

        $t = str_replace(url('/'), '', url()->previous());

        $a = explode('/', $t);

        $type = array_pop($a);

        if ($request->search == "") {
            return redirect("/events");
        }
        else {
            $response = Http::get("http://localhost:8030/ws/events/all/search/$type/$request->search");

            $Types = json_decode($response);


            return view('events', compact('Types'));
        }



    }
}
