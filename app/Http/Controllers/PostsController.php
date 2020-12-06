<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller

{
    //**get通信*/
    public function post()
    {
        return view('add.post');
    }

    //post通信
    public function result(Request $req)
    {
        $name = $req->input('name');
        return view('add.post', compact('name'));
    }

}
