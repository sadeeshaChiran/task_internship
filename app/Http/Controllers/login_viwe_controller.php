<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login_viwe_controller extends Controller
{
    public function index()
    {


        return view('pages.SignIn_AND_Register.index');

    }
}


