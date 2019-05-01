<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    //
    public function logout($logout = ""){
        Auth::logout();
        return redirect('open-the-book-of-life/unauthorized')->with('message','You do not have sufficient permissions to access
        the requested page!!');
    }
}
