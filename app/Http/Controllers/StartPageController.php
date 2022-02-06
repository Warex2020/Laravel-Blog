<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index()
    {
        //$posts = Post::all()->count();
       // dd($posts);

        // letzten 5 Beiträge
        $posts = Post::latest()->limit(5)->get();

        // Sortiert nach neuste oben

        // als gelöscht markiert ausblenden



        return view('index', compact('posts'));
    }
}
