<?php

namespace App\Http\Controllers\Auth;

use App\Models\UserSeller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth/register');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
            'password' => 'required|confirmed',
        ]);

        UserSeller::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'birthdate' => $request->tanggal_lahir,
            'gender' => $request->jenis_kelamin,
            'password' => Hash::make($request->password),
        ]);

        Auth::attempt($request->only('email', 'password'));
        return redirect()->route('/');
    }
}