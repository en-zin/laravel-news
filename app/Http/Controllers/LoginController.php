<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    //
    public function index() {
        return view('Login');
    }

    public function create() {

        $encrypted = Crypt::encryptString();

    }
}
