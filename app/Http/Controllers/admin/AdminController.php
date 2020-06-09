<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index()
    {
        $About=About::all();
        return view('admin.about.index',compact('About'));
    }
}
