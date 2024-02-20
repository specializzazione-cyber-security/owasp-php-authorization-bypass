<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only(['create','store']);
    }

    public function create(){

        return view("article.create");
    }

    public function store(Request $request){
        Auth::user()->articles()->create([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        
        return redirect(route('dashboard'))->with('message', 'Articolo creato con successo!');
    }
}
