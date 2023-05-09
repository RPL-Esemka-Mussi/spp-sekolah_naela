<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'name'=>['required', 'max:225'],
        'email'=>['required','email:dns','unique:users'],
        'password'=>['required', 'min:5', 'max:225'],
        'level'=>['required']      
       ]);

    //    $validatedData['password'] = bcrypt($validatedData['password']);
          $validatedData['password'] = Hash::make($validatedData['password']);

      User::create($validatedData);

    //   $request->session()->flash('success', 'Registration succsessfull! Please Login');

      return redirect('/login')->with('success', 'Registration succsessfull! Please Login');
    }
}
