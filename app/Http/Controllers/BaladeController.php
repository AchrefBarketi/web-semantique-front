<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Balade;
use App\Models\Programme;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class BaladeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get("http://localhost:8030/ws/subclass/all/Tour");

        $subClass = json_decode($response);

        $Types = [];

        foreach ($subClass as $sub) {

            $type = substr($sub->subClass->value, 59);

            array_push($Types, $type);
        }


        return view('bike-tours', compact('Types'));
    }

    public function indexCity()
    {

        $response = Http::get("http://localhost:8030/ws/subclass/all/City");

        $subClass = json_decode($response);

        $Types = [];

        foreach ($subClass as $sub) {

            $type = substr($sub->subClass->value, 59);
            // echo $type ;

            array_push($Types, $type);
        }


        return view('bike-tours', compact('Types'));
    }

    public function indexOffRoad()
    {

        $response = Http::get("http://localhost:8030/ws/subclass/all/OffRoad");

        $subClass = json_decode($response);

        $Types = [];

        foreach ($subClass as $sub) {

            $type = substr($sub->subClass->value, 59);
            // echo $type ;

            array_push($Types, $type);
        }


        return view('bike-tours', compact('Types'));
    }


    public function getAllByType($Type)
    {

        $response = Http::get("http://localhost:8030/ws/tours/all/$Type");

        $Types = json_decode($response);

        // dd($Types[0]);

        // function tour($v){
        //     if($v->Title->value == "Tunis City Tour"){

        //     }

        //     return $v == "sxcxd";
        // };

        // array_filter($Types,"tour");


        return view('bike-tours', compact('Types'));
    }

    public function getAllByTypeOffRoad($Type)
    {

        $response = Http::get("http://localhost:8030/ws/tours/all/$Type");

        $Types = json_decode($response);


        return view('bike-tours', compact('Types'));
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

        $response = Http::get("http://localhost:8030/ws/tours/all/$type/$title");

        $Balade = json_decode($response);

        //dd($Balade);


        return view('single-tour', compact('Balade'));
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

    public static function getBaladesByDeal($id)
    {
        $balades = Balade::get()->where('deal_id', $id);
        return $balades;
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
            return redirect("/bike-tours");
        }
        else {
            $response = Http::get("http://localhost:8030/ws/tours/all/search/$type/$request->search");

            $Types = json_decode($response);


            return view('bike-tours', compact('Types'));
        }



    }
}
