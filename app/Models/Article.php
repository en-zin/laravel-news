<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    //insertするやつを決めている
    protected $fillable = ['title', 'text'];

}
