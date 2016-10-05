<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
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
        $articles = Article::all();
        return view('article.index', compact('articles'));
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
        return redirect(route('article.index'));
    }

    public function show($article)
    {
        return view('article.show', compact('article'));
    }

    public function edit($article)
    {
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $article)
    {
        $validator = $this->validator($request);
        if($validator->fails()) {
            return $this->throwValidationException($request, $validator);
        }
        $postData = $request->all();
        $article->update($postData);
        return redirect(route('article.show', $article->id));
    }

    public function destroy($article)
    {
        $article->delete();
        return redirect(route('article.index'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $articles = Article::where('title', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->get();
        return view('article.index', compact('articles'));

    }
}
