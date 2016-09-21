<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }

    public function create()
    {
        dd('test');
//        return view('article.create');
    }

    public function store(Request $request)
    {
        $postData = $request->all();
        Article::create([
            'title' => $postData['title'],
            'description' => $postData['description']
        ]);
        return redirect(route('article.create'));
    }
}
