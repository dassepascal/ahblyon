<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;
use App\Manager\ArticleManager;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    private $articleManager;

    public function __construct(ArticleManager $articleManager)
    {

        $this->articleManager = $articleManager;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(7);

        return view('articles.index', [
            'articles' =>$articles,
        ]);

    }
    public function annee(){

        $annees = Article::all();
        dd($annees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\ArticleRequest 
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $validated = $request->validated();
        $this->articleManager->build(new Article(), $request);// todo
        return redirect()->route('articles.index')->with("success", "l'événement a bien été sauvegardé");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("articles.edit", [
            'articles' => $article,


        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        //dd($this->articleManager);
        //dd($article->title);
        $this->articleManager->build($article, $request);


        //  $article->title = $request->input('title');
        //  $article->subtitle = $request->input('subtitle');
        //  $article->content = $request->input('content');
        //  $article->save();
        return redirect()->route('articles.index')->with('success', "L'événement a bien modifié !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Article $article)
    {

        $article->delete();
        return redirect()->route('articles.index')->with('success', "L'événement a bien été supprimé !");
    }
}
