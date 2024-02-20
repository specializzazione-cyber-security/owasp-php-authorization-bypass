<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin');
    }

    public function dashboard(){
        $articles = Article::all()->sortByDesc('id');

        return view('admin.dashboard', compact('articles'));
    }
}
