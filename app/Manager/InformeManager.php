<?php

namespace App\Manager;

use App\Models\Informe;
use Illuminate\Http\Request;
use App\Http\Requests\InformeRequest;

class InformeManager
{
    public function build(Informe $informe, InformeRequest $request)
    {
        // dd($request->all());
        $informe->title = $request->input('title');
        //$informe->subtitle = $request->input('subtitle');
        $informe->content = $request->input('content');

        $informe->save();
    }
}
