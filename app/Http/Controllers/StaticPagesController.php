<?php

namespace App\Http\Controllers;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('weibo/home');
    }

    public function help()
    {
        return view('weibo/help');
    }

    public function about()
    {
        return view('weibo/about');
    }
}
