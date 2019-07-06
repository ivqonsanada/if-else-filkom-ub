<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function home()
    {
        return view('page/home');
    }

    public function login()
    {
        return view('page/login');
    }

    public function rules()
    {
        return view('page/rules');
    }
    public function documentation()
    {
        return view('page/documentation');
    }
    public function faq()
    {
        return view('page/faq');
    }
    public function nilai()
    {
        return view('page/nilai');
    }
    public function tugas()
    {
        return view('page/tugas');
    }
}
