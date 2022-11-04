<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;



class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get("http://localhost:8030/ws/association/all/Association");

        $Types = json_decode($response);

        // $Types = [];

        // foreach ($subClass as $sub) {

        //     $type = substr($sub->subClass->value, 59);

        //     array_push($Types, $type);
        // }

        return view('associationsall', compact('Types'));
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

        $request->validate([
            'name'      =>  'required',
            'adresse'     =>  'required',
            'phone'     =>  'required|numeric|unique:associations|regex:/^([0-9\s\-\+\(\)]*)$/|digits:8',
            'description'     =>  'required',
            'email'     =>  'required|email|unique:associations',
            'picture'     =>  'required'
        ]);

        echo request()->picture;

        $file_name = time() . '.' . request()->picture->getClientOriginalExtension();


        $image = base64_encode(file_get_contents($request->file('picture')));
        $extension = $request->file('picture')->getClientOriginalExtension();

        $pic = request()->picture->move(public_path('images'), $file_name);


        $Associations = new Association();
        $Associations->name = $request->input('name');
        $Associations->adresse = $request->input('adresse');
        $Associations->phone = $request->input('phone');
        $Associations->description = $request->input('description');
        $Associations->email = $request->input('email');
        $Associations->picture = $file_name;
        $Associations->image = $image;
        $Associations->extension = $extension;

        $Associations->save();

        return redirect('/associations');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Search(Request $request)
    {

        $search = $request->search;
        $Associations = Association::where('name', 'LIKE', '%' . $search . '%')
            ->orWhere('email', 'LIKE', '%' . $search . '%')
            ->orWhere('phone', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->orWhere('adresse', 'LIKE', '%' . $search . '%')->get();
        // if (count($Associations) > 0)
        //     return view('associations', compact('Associations'))->withDetails($Associations)->withQuery($search);
        // else
        //     return view('associations', compact('Associations'))->withMessage('No Associations Details found. Try to search again !');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://localhost:8030/ws/association/all",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
            ),
        ));

        $Associations = curl_exec($curl);

        //dd($Associations) ;

        $associations = json_decode($Associations);

        //dd($associations) ;

        $err = curl_error($curl);

        curl_close($curl);
        return view('associationsall', compact('associations'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Association  $Association
     * @return \Illuminate\Http\Response
     */
    public function edit(Association $Associations)
    {
        // return view("tours", compact("Association"));
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
        $request->validate([
            'name'      =>  'required',
            'adresse'     =>  'required',
            'phone'     =>  'required',
            'description'     =>  'required',
            'email'     =>  'required',
            'picture'     =>  'required'
        ]);
        $picture = $request->hidden_association_image;

        if ($request->picture != '') {
            $picture = time() . '.' . request()->picture->getClientOriginalExtension();

            request()->picture->move(public_path('images'), $picture);
        }
        $image = base64_encode(file_get_contents($request->file('picture')));
        $extension = $request->file('picture')->getClientOriginalExtension();

        $Associations = Association::find($id);
        $Associations->name = $request->input('name');
        $Associations->adresse = $request->input('adresse');
        $Associations->phone = $request->input('phone');
        $Associations->description = $request->input('description');
        $Associations->email = $request->input('email');
        $Associations->picture = $picture;
        $Associations->image = $image;
        $Associations->extension = $extension;
        $Associations->save();

        return redirect('/associations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Associations = Association::find($id);
        $Associations->delete();
        return redirect('/associations');
    }
}
