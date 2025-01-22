<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function detailAmore()
    {
        return view('detail/superior/amore');
    }

    public function detailSuperior02()
    {
        return view('detail.superior02');
    }

    public function detailSuperior03()
    {
        return view('detail.superior03');
    }

    public function detailSuperior04()
    {
        return view('detail/superior/superior04');
    }

    public function detailDeluxe01()
    {
        return view('detail/deluxe/deluxe01');
    }

    public function detailDeluxe02()
    {
        return view('detail/deluxe/deluxe02');
    }
}
