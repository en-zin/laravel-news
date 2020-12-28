<?php

namespace App\Http\Controllers;
use App\Models\Article;//modelが存在してくれているだけでデータベースとの接続ができている
use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //laravel_news接続時
    public function index() {
       $article = Article::all();
        return view('layout',compact('article'));
    }

    //post通信
    public function create(TestRequest $req)
    {
        $article = new Article(); //$articleはModelsディレクトリにあるArticleと定義  役割DBとの通信
        $article -> title = $req -> title;
        $article -> text = $req -> text;
        $article -> timestamps = false;
        $article->save();
        $req->session()->regenerateToken();
        return redirect('/');

    }


}
