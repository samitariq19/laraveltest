<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id) {
        $article = Article::find($id);
        // dd($article);
        return view('articles.show', ['article' => $article]);
    }

    public function index() {
        $articles = Article::latest()->get();
        // dd($articles);
        return view('articles.index', ['articles' => $articles]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store() {
        // dd("hello");
        $article = new Article;
        // dump(\request()->all());    
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        // dd($article);
        $article->save();
        return \redirect('/articles');
    }
}
