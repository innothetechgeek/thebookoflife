<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    //
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
