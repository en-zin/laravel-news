<?php

namespace App\Http\Controllers;

//modelが存在してくれているだけでデータベースとの接続ができている
use App\Models\Article;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;//

class DetailsController extends Controller
{

    //明細ページ
    //引数の$idはweb.phpの時に書いていたパラメータを引数としてつかっている？
    public function index($id) {

        //find()条件の指定だけでWhere文を裏側でしてくれている
        $details = Article::where('id',$id)->get();
        $comment = Comment::where('id',$id)->get();
        //idを書くことで取得したidパラメータをdetails.bladeに渡してあげることができる
        return view('details',compact('details','id','comment'));

    }

    //引数の$idはパラメータで使っている数字
    public function create(CommentRequest $req) {

        $comment = new Comment();

        $comment->create([
            'id' => request('id'),
            'comment' => request('comment'),
        ]);

        //リダイレクトする際にどのルーティング処理を通って表示させるかを決めている
        return redirect(route('details_route',[

            //id => $idはパラメータ部分はこれを使ってね的な感じです。
            'id' => request('id'),

        ]));

    }

    public function destroy($id) {

        //modelのcommentから'comment_id'と同じもののデータを取得してねてかんじ
        $comment=Comment::where('comment_id',request('comment_id'));

        $comment->delete();

        return redirect(route('details_route', [

            //id => $idはパラメータ部分はこれを使ってね的な感じです。
            'id' => $id,

        ]));

    }

}
