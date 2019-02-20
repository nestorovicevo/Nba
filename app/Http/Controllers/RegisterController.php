<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'sometimes|required_with:password'
        ]);

        $data = $request->only(['email', 'name', 'password', 'password_confirmation']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        auth()->login($user);

        return redirect()->route('all-teams');
    }
}
