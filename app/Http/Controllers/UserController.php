<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
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
}
