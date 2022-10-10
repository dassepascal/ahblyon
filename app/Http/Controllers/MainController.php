<?php

namespace App\Http\Controllers;

use App\Models\Dons;
use App\Models\Photo;
use App\Models\Article;
use App\Models\Informe;
use App\Models\Parraine;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function home()
    {
        $articles = Article::paginate(4);
        $photos = Photo::all();
        return view('home', [
            'articles'=>$articles,
            'photos'=>$photos,
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
        $archives = Article::orderBy('created_at', 'desc')->get();
        $archives= $archives->unique('created_at');
        return view('archives', [
            'archives'=> $archives,
        ]);
    }
    public function archive($id){

       // $article = Article::where('slug', $slug)->firstOrFail();
       //requete qui correspond a tous les articles correspondant a id
       // trouver la date
            $articles = Article::All();//todo paginate
    //    dd($articles);
        $archive = Article::where('id',$id)->firstOrFail();


        return view('archive',[
            'archive'=>$archive,
             'articles'=>$articles
        ]);

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
    public function indexInformes()
    {
        $informes = Informe::select("*")
        // ->orderBy("created_at", "desc")
        // ->get()
        ->paginate(4);

        return view('informes', [
            'informes'=>$informes
        ]);
    }
    public function indexParraines()
    {
        $parraines = Parraine::select("*")
        // ->orderBy("created_at", "desc")
        // ->get()
        ->paginate(2);

        return view('parraines', [
            'parraines'=>$parraines
        ]);
    }
    public function showParraine(Parraine $parraine){
        // dd($parraine);
        // die();
        return view('parraine',[
            'parraine'=> $parraine
        ]);
    }
    public function showInforme(Informe $informe){
        // dd($parraine);
        // die();
        return view('informe',[
            'informe'=> $informe
        ]);
    }
}
