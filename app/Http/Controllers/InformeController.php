<?php

namespace App\Http\Controllers;

use App\Models\Informe;
//use Illuminate\Http\Request;
use App\Manager\InformeManager;
use App\Http\Requests\InformeRequest;

class InformeController extends Controller
{

    private $informeManager;

    public function __construct(InformeManager $informeManager)
    {
        $this->informeManager = $informeManager;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informes = Informe::all();

            return view('informes.index', [
                'informes' =>$informes,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformeRequest $request)
    {
        $validated = $request->validated();
        $this->informeManager->build(new Informe(),$request);
        return redirect()->route('informes.index')->with("success", "l'information a bien été sauvegardé");
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
    public function edit(Informe $informes)

    {
        //dd($informes);
        return view('informes.edit',[
            'informes' =>$informes,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InformeRequest $request, Informe $informe)
    {
        $informe->title = $request->input('title');
        $informe->content = $request->input('content');
        $informe->save();
        return redirect()->route('informes.index')->with('success', 'l\'information a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Informe $informe){
        $informe->delete();
        return redirect()->route('informes.index')->with('success', "L'info a bien été supprimé !");
    }
}
