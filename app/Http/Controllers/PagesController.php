<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function output()
    {
        return view('pages.output');
    }

    public function outputAr()
    {
        return view('pages.outputAr');
    }
}
