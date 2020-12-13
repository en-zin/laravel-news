<?php

namespace App\Http\Controllers;

//modelが存在してくれているだけでデータベースとの接続ができている
use App\Models\Article;

use Illuminate\Http\Request;

use App\Models\Comment;//

class DetailsController extends Controller
{



    //明細ページ
    //$idはweb.phpの時に書いていたパラメータを引数としてつかっている？
    public function details($id) {

        //find()条件の指定だけでWhere文を裏側でしてくれている
        $details = Article::findOrFail($id);

        //idを書くことで取得したidパラメータをdetails.bladeに渡してあげることができる
        return view('details',compact('details','id'));

    }

    public function result() {
        $commment = new Comment();

        $commment->create([
            'id' => request('id'),
            'comment' => request('comment'),
        ]);

        return redirect('details');
    }

}
