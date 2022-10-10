<?php

namespace App\Http\Controllers;

use App\Models\Dons;
use App\Manager\DonManager;
use Illuminate\Http\Request;
use App\Http\Requests\DonRequest;

class DonsController extends Controller
{
public function __construct(DonManager $donManager)
{
    $this->donManager = $donManager;

}

    public function index()
    {
        $dons = Dons::paginate(2);
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

        $this ->donManager->build(new Dons(), $request);
        // Dons::create([
        //     'title'=>$request->input('title'),
        //     'content'=>$request->input('content')
        // ]);
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
        dd($dons);
        return view(
            "dons.edit",
            [
                'dons'=>$dons,
            ]
        );
    }


    public function update(DonRequest $request, Dons $dons){
        //dd(get_class_methods($this->donManager));

        //dd($dons);
        // $dons->title = $request->input('title');
        // $dons->content = $request ->input('content');
        // $dons->save();

        $this->donManager->build($dons, $request);
        return redirect()->route('dons.index')->with("success","Le don a bien été modifié !");


    }
    public function delete(Dons $dons){
        $dons->delete();
        return redirect()->route('dons.index')->with('success', "le don a bien été supprimé");
    }
}
