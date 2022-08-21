<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $title = "Home";
        return view('user-panel.index', compact('title'));
    }

    public function aboutUs()
    {
        $title = "About-Us";
        return view('user-panel.about-us', compact('title'));
    }

    public function doctors()
    {
        $title = "Doctors";
        return view('user-panel.doctors', compact('title'));
    }

    public function news()
    {
        $title = "News";
        return view('user-panel.news', compact('title'));
    }

    public function newsDetails()
    {
        $title = "News Details";
        return view('user-panel.news-details', compact('title'));
    }

    public function contact()
    {
        $title = "Contact";
        return view('user-panel.contact', compact('title'));
    }

    public function login()
    {
        $title = "Login";
        return view('user-panel.login', compact('title'));
    }

    public function registration()
    {
        $title = "Registration";
        return view('user-panel.reg', compact('title'));
    }
}
