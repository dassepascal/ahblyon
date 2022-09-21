<?php

namespace App\Http\Controllers;

use App\Models\Dons;
use App\Models\Article;
use App\Models\Informe;
use App\Models\Parraine;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function home()
    {
        $articles = Article::paginate(4);
        return view('home', [
            'articles'=>$articles
        ]);
    }
    // public function infos()
    // {
    //     return view('infos');
    // }
    public function parraine()
    {
        return view('parraine');
    }
    public function projets()
    {
        return view('projets');
    }
    public function association()
    {
        return view('association');
    }
    public function aides()
    {
        return view('aides');
    }
    public function village()
    {
        return view('village');
    }

    public function archives()
    {
        return view('archives');
    }
    public function mentionsLegales()
    {
        return view('mentions-legales');
    }
    public function faq()
    {
        return view('faq');
    }
    public function contact()
    {
        return view('contact');
    }
    // public function admin(){
    //     return view('admin');
    // }


    public function indexArticles()
    {
        $articles = Article::select("*")
        ->orderBy("created_at", "desc")
        ->get()
        ->paginate(4);

        return view('articles', [
        'articles'=>$articles
    ]);
    }
    public function show(Article $article)
    {
        // $article = Article::where('slug', $slug)->firstOrFail();

        return view('article', [
    'article'=>$article,
        ]);
    }
    public function indexDons()
    {
        $dons = Dons::all();
        //dd($dons);
        return view('dons', [
            'dons' =>$dons

        ]);
    }
    public function indexInformes(){
        $informes = Informe::select("*")
        // ->orderBy("created_at", "desc")
        // ->get()
        ->paginate(4);

        return view('informes',[
            'informes'=>$informes
        ]);
    }
    public function indexParraines(){
        $parraines = Parraine::select("*")
        // ->orderBy("created_at", "desc")
        // ->get()
        ->paginate(2);

        return view('parraines',[
            'parraines'=>$parraines
        ]);
    }
}
