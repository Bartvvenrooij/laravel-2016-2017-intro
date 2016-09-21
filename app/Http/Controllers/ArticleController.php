<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Validator;

class ArticleController extends Controller
{
    private function validator($request)
    {
        return Validator::make($request->all(), [
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255'
        ]);
    }

    public function index()
    {
        return view('article.index');
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $validator = $this->validator($request);
        if($validator->fails()) {
            return $this->throwValidationException($request, $validator);
        }
        $postData = $request->all();
        Article::create([
            'title' => $postData['title'],
            'description' => $postData['description']
        ]);
        return redirect(route('article.create'));
    }
}
