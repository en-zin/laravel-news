<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function main() {
       $article = Article::all();
        dump($article);
        return view('laravel_news_main',compact('article'));
    }

    //post通信
    public function result(Request $req)
    {
        $article = new Article();
        $article ->title = $req->title;
        $article ->text = $req->text;
        $article -> timestamps = false;
        $article->save();
        return redirect('http://localhost');
    }
}
