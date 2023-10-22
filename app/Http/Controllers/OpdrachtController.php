<?php

namespace App\Http\Controllers;
use App\Models\Fruit;

use Illuminate\Http\Request;

class OpdrachtController extends Controller
{
    public function show(){
        $name = 'Sylvester van Houwelingen';
        $fruits = Fruit::all();

        return view('opdracht', ['name' => $name, 'fruits' => $fruits]);
    }
}
