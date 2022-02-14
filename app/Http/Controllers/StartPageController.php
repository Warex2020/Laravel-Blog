<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index()
    {

        $posts = Post::latest()
            ->limit(5)
            ->get();



        return view('index', compact('posts'));
    }
}
