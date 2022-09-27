<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;

class ImageController extends Controller
{
    public function index()
    {
        return view('image');
    }

    public function store(Request $request){
        //dd($request->category);
        $validationData = $request->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store('public/images');
        $category_id= $request->category;

        $save = new Photo;

        $save->name = $name;
        $save->path = $path;
        $save->category_id = $category_id;

        $save->save();
        //$this->photoManager->build(new Photo(),$request);
       return  redirect('admin/image-upload')->with('success', 'l\'image a bien été sauvegagé');

    }
    public function indexPhoto(){
        $photos = Photo::all();
        return view('photo.index',[
            'photos'=>$photos,
        ]);
    }
    public function create(){
        return view('photo.create',[
            'categories'=>Category::all(),
        ]);
    }
}
