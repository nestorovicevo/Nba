<?php

namespace App\Http\Controllers;

class LoginController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect()->route('all-teams');
    }
}
