<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformeRequest;
use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Manager\InformeManager;

class InformeController extends Controller
{
    private $informeManager;

    public function __construct(InformeManager $informeManager)
    {
        $this->informeManager = $informeManager;
    }

        public function index()
        {
            $informes = Informe::all();

            return view('informes.index', [
                'informes' =>$informes,
            ]);
        }
        public function create()
        {
            return view('informes.create');
        }
        /**
         * Store a newly created resource in storage.
         *
         * @param  \App\Http\InformeRequest  $request
         * @return \Illuminate\Http\Response
         */
        public function store(InformeRequest $request)
        {
            $validated = $request->validated();
            $this->informeManager->build(new Informe(),$request);
            return redirect()->route('informes.index')->with("sucess", "l'information a bien été sauvegardé");
        }
        public function edit(Informe $informe){
            dd($informe);
            return view('informes.edit',[
                'informes' =>$informe,
            ]);
        }
        public function update(InformeRequest $request, Informe $informe){
            $this->informeManager->build($informe, $request);
        }
}
