<?php

namespace App\Http\Controllers;

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
}
