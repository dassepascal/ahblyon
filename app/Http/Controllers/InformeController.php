<?php

namespace App\Http\Controllers;

use App\Models\Informe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformeController extends Controller
{
    public function index(){

        $informes = Informe::all();
        dd($informes);
        return view ('informes.index', [
            'informes' =>$informes,
        ]);

    }
}
