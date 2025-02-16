<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function allCategories()
    {
        return view('boats.all-categories');
    }

    public function detailAmore()
    {
        return view('detail/superior/amore');
    }

    public function detailSuperior02()
    {
        return view('detail/superior/superior02');
    }

    public function detailSuperior03()
    {
        return view('detail/superior/superior03');
    }


    public function detailDeluxe01()
    {
        return view('detail/deluxe/deluxe01');
    }

    public function detailDeluxe02()
    {
        return view('detail/deluxe/deluxe02');
    }

    public function detailDeluxe03()
    {
        return view('detail/deluxe/deluxe03');
    }

    public function detailLuxury01()
    {
        return view('detail/luxury/luxury01');
    }

    public function detailLuxury02()
    {
        return view('detail/luxury/luxury02');
    }

    public function detailLuxury03()
    {
        return view('detail/luxury/luxury03');
    }
}
