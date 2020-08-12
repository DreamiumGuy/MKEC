<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view('welcome');
    }


    public function projects()
    {
        return view('projects');
    }


    public function about()
    {
        return view('about');
    }


    public function news()
    {
        return view('news');
    }


    public function contact()
    {
        return view('contactform');
    }
}
