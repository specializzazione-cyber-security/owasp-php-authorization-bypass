<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('isAdmin')->only(['create','store','delete']);
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

    public function delete(Article $article){
        $article->delete();

        return redirect(route('dashboard'))->with('message', 'Operazione effettuata con successo!');

    }

    public function show(Article $article){
        return view('article.show', compact("article"));
    }
}
