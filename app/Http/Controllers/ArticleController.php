<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    function index(){
        $articles = DB::table('articcles')->get();
        return view("articles/index",compact("articles"));
    }
}
