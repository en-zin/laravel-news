<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //laravel_news接続時
    public function main() {
       $article = Article::all();
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
        $req->session()->regenerateToken();
        return redirect('/');
    }
    //明細ページ
}
