<?php

namespace App\Http\Controllers;

use App\Article;
use App\Role;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        return view("index.index");
    }
}
