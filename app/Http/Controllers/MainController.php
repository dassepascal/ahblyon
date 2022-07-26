<?php

namespace App\Http\Controllers;

use App\Models\Article;
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
    public function infos()
    {
        return view('infos');
    }
    public function parraine()
    {
        return view('parraine');
    }
    public function projets(){
        return view('projets');
    }
    public function association(){
        return view('association');
    }
    public function village(){
        return view('village');
    }
    public function don()
    {
        return view('don');
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


    public function index()
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
}
