<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;
use App\Post;
use App\Video;
class HomePageController extends Controller
{
    //
    public function index()
    {
        $about=About::all();
        $posts=Post::all();
        $videos=Video::all();
        return view('HomePage.index',compact('about', 'posts', 'videos'));
    }

}
