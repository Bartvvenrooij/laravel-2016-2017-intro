<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        return view("index.index");
    }

    public function post(Request $request)
    {
        dd($request->get('title'));
    }
}
