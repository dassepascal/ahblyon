<?php

namespace App\Manager;

use App\Models\Dons;
use App\Http\Requests\DonRequest;



class DonManager
{
    public function build(Dons $dons, DonRequest $request)
    {
        // dd($request->all());
        $dons->title = $request->input('title');
        $dons->content = $request->input('content');
        $dons->save();
    }
}
