<?php

namespace App\Manager;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticleManager
{
    public function build(Article $article, Request $request){
        // dd($request->all());
        $article->title = $request->input('title');
        $article->subtitle = $request->input('subtitle');
        $article->content = $request->input('content');
        $article->category_id = $request->input('category');
        $article->save();
    }
}

