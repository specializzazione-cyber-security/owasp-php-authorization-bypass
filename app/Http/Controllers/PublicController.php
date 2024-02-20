<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function welcome () {
        $articles = Article::all()->sortByDesc('created_at');
        return view('welcome', compact('articles'));
    }
}
