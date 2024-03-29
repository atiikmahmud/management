<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == 1)
        {
            return redirect('/admin-dashboard');
        }
        else
        {
            return redirect('/dashboard');
        }
    }

    public function home()
    {
        return view('welcome');
    }

    public function template()
    {
        return view('mail.sendmail');
    }
}
