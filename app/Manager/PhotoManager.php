<?php

namespace App\Manager;

use App\Models\Photo;
use App\Http\Requests\PhotoRequest;

class PhotoManager
{
    public function build(Photo $photo, PhotoRequest $request)
    {
        dd($request->all());
        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');

        $save = new Photo;

        $save->name = $name;
        $save->path = $path;

        $save->save();
            }
}

