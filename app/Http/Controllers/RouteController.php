<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormRequest;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function accueil($name){
        $age = 17;
        $data = ['12','20','30','50'];
        return view('accueil',[
            'name'=>$name,
            'age' => $age,
            'tab' => $data
        ]);
    }

    public function afficher(){
        return view('form');
    }

    public function formValidate(ValidateFormRequest $request){
        $verif = $request;

        if($verif){
            echo "Bien verifié";
        }else{
            return redirect()->back();
        }

        
    }
}
