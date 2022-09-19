<?php

namespace App\Http\Controllers;

use App\Models\Dons;
use Illuminate\Http\Request;
use App\Http\Requests\DonRequest;

class DonsController extends Controller
{
    public function index()
    {
        $dons = Dons::all();
        //dd($dons);
        return view('dons.index', [
            'dons' =>$dons,
        ]);
    }

    public function create()
    {
        return view('dons.create');
    }


    /**
     *Store a newly created resource in storage.
     *
    *@param App\Request $request\DonRequest $request
    *@return \Illuminate\Http\Response
    */
    public function store(DonRequest $request)
    {
        $validated = $request->validated();
        Dons::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content')
        ]);
        return redirect()->route('dons.index')->with("success","le don a bien été mis à jour");
    }
/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(Dons $dons)
    {
        return view(
            "dons.edit",
            [
                'dons'=>$dons,
            ]
        );
    }
}
