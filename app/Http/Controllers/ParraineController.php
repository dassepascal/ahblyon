<?php

namespace App\Http\Controllers;

use App\Models\Parraine;
use Illuminate\Http\Request;
use App\Http\Requests\ParraineRequest;

class ParraineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parraines = Parraine::paginate(2);
        return view('parraines.index', [
            'parraines'=>$parraines,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parraines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Request\ParraineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParraineRequest $request)
    {
        $validated = $request->validated();
        Parraine::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content')
        ]);
        return redirect()->route('parraines.index')->with("success", " Le nouveau texte a bien été sauvegadé");
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Parraine $parraine)
    {
        //dd($parraine);
        return view('parraines.edit', [
            'parraine'=>$parraine,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parraine $parraine)
    {
        $parraine->title = $request->input('title');
        $parraine->content = $request->input('content');
        $parraine->save();
        return redirect()->route('parraines.index')->with('success', 'le parrainage a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Parraine $parraine)
    {
        $parraine->delete();
        return redirect()->route('parraines.index')->with('success', "le parraine a bien été supprimé");
    }
}
