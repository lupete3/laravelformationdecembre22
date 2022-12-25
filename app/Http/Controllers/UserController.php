<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showForm(){
        return view('users.register');
    }

    public function saveUser(User $user, UserRequest $request){
      /* User::create([
        'name' => $request->nom,
        'email' => $request->email,
        'password' => $request->password,
      ]); */
      $user->name = $request->nom;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);

      $user->save();      

      return redirect()->back()->with('success', 'Votre compte est crée avec succès');
    }

    public function showLoginForm(){
        return view('users.login');
    }

    public function login(Request $request){

      $credetials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:3'
      ]);
        if(Auth::attempt($credetials)){
          $request->session()->regenerate();

          return redirect()->intended(route('dashboard'));
        }else{
          return redirect()->back()->with('error','Login ou mot de passe incorrect');
        }
    }

    public function dashboard(){
      return view('users.dashboard');
    }
}
