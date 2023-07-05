<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logout_controller extends Controller
{
    public function logout() {
        Auth::logout();
        return redirect('/');
      }
}
