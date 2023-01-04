<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationValidation;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;

class RegisterController extends Controller
{
    public function register()
      {

        return view('auth.register');
      }

    public function store(RegistrationValidation $request)
      {
          User::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
          ]);

          Auth::attempt($request->only('email', 'password'));
          return redirect('home');
      }
}
