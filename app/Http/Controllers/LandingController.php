<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Middleware\CekLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LandingController extends Controller
{
      public function login(){
            return view('auth.tes-login3');
    }
    public function landing(){
        return view('auth.landing');
    }
    public function registration(){
            return view('auth.tes-regis3');
    }
    public function index()
    {
        return view('auth.landing');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('kasir')
                        ->withSuccess('You have Successfully loggedin');
        }

        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/")->withSuccess('Great! You have Successfully loggedin');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }
}
