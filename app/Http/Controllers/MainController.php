<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function index()
    {
        $articles = Article::paginate(4);

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
