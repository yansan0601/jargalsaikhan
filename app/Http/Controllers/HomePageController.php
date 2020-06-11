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
        $videos=Video::orderBy('created_at','desc')->paginate(2);
        return view('homepage.index',compact('about', 'posts', 'videos'));
    }

}
