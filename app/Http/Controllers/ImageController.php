<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index()
    {
        return view('image');
    }

    public function store(Request $request)
    {
        //dd($request->category);
        $validationData = $request->validate([

            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $name = Storage::disk('local')->put('images', $request->image);

        //$name = $request->file('image')->getClientOriginalName();
        $filename = time() . '.' . $request->image->extension();
        $path = $request->file('image')->storeAs(
            'images',
            $filename,
            'public'
        );
        $category_id = $request->category;

        $save = new Photo;

        $save->name = $name;
        $save->path = $path;


        $save->category_id = $category_id;

        $save->save();
        //$this->photoManager->build(new Photo(),$request);
        return  redirect('admin/image-upload')->with('success', 'l\'image a bien été sauvegagé');
    }

    // public function deleteImage(Request $request)

    // {

    //     if(Storage::exists('image-upload/3w10y8KJhmb9q4YUmf9kCSNDrNY2k1VilPxM1LK.jpg.png')){

    //         Storage::delete('image-upload/3w10y8KJhmb9q4YUmf9kCSNDrNY2k1VilPxM1LK.jpg.png');
    //         dd('delete');

    //     }else{

    //         dd('File does not exists.');

    //     }

    // }


    public function indexPhoto()
    {
        $photos = Photo::paginate(8);
        return view('photo.index', [
            'photos' => $photos,
        ]);
    }
    public function create()
    {
        return view('photo.create', [
            'categories' => Category::all(),
        ]);
    }
    public function delete(Photo $photo,Request $request)
    {


        // if(Storage::exists('image-upload/test.png')){

        //     Storage::delete('image-upload/test.png');
        //     dd('delete');

        // }else{

        //     dd('File does not exists.');

        // }

        $photo->delete();

        return redirect()->route('photo.index')->with('success', "la photo a bien été supprimé");
    }

    public function edit(Photo $photo)
    {

        return view('photo.edit', [
            'photo' => $photo,
            'categories' => Category::all(),

        ]);
    }
    public function update(Request $request, Photo $photo)
    {
        //dd($photo->category_id);
        $photo->category_id = $request->input('category');
        $photo->save();
        return redirect()->route('photo.index')->with('success','la photo a bien été mis à jour');
    }
}
