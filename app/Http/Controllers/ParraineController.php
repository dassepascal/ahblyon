<?php

namespace App\Http\Controllers;

use App\Models\Parraine;
use Illuminate\Http\Request;

class ParraineController extends Controller
{
    public function index(){
        $parraines = Parraine::paginate(2);
        return view('parraines.index',[
            'parraines'=>$parraines,
        ]);
    }
}
