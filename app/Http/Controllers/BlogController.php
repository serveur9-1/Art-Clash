<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function blog()
    {

        return view('site.blog.blog');

    }


    public function detail()
    {

        return view('site.blog.detail');

    }
}
