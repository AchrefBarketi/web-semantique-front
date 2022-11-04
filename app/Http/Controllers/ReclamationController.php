<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Association=Association::all();

        $reclamation = Reclamation::all();
        return view('reclamation', compact('reclamation','Association'));
    }

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Search(Request $request)
    {
       
        $Association=Association::all();

        $search = $request->search;
        $reclamation = Reclamation::where ( 'sujet', 'LIKE', '%' . $search . '%' )
            ->orWhere ( 'email', 'LIKE', '%' . $search . '%' )
            ->orWhere ( 'status', 'LIKE', '%' . $search . '%' )
            ->orWhere ( 'priority', 'LIKE', '%' . $search . '%' )
            ->orWhere ( 'description', 'LIKE', '%' . $search . '%' )->get ();
            if (count ( $reclamation ) > 0)
            return view ( 'reclamation', compact('reclamation','Association'))->withDetails( $reclamation )->withQuery ( $search );
        else
            return view ( 'reclamation',compact('reclamation','Association') )->withMessage( 'No reclamation Details found. Try to search again !' );
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
            'sujet' => 'required',
            'description' => 'required',
            'email' => 'required',
            'association_id' => 'required',
            'priority' => 'required',
            

        ]);
        $Reclamation=new Reclamation();
        $Reclamation->sujet = $request->input('sujet');
        $Reclamation->description = $request->input('description');
        $Reclamation->email = $request->input('email');
        $Reclamation->association_id = $request->input('association_id');
        $Reclamation->status="PENDING";
        $Reclamation->priority = $request->input('priority');
        $Reclamation->save();
        return redirect('/associations');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(Reclamation $reclamation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamation $reclamation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Reclamation $reclamation)
    {
        $request->validate([
            'sujet' => 'required',
            'description' => 'required',
            'email' => 'required',
            'status' => 'required',
            'priority' => 'required',
            
        ]);
        
        $reclamation->update($request->all());
        return redirect('/associations');

    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamation $reclamation)
    {
        $reclamation->delete();
        return redirect('/reclamation');
    }
}
