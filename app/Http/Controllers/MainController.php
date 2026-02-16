<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{ 
    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
       $array = [
            ['id' => 1, 'title' => 'Лосось', 'price' => 3500, 'path' => 'pict1.jpg'],
            ['id' => 2, 'title' => 'Окунь', 'price' => 200, 'path' => 'pict2.jpg'],
            ['id' => 3, 'title' => 'Карп', 'price' => 1500, 'path' => 'pict3.jpg'],
            ['id' => 2, 'title' => 'Лещь', 'price' => 500, 'path' => 'pict4.jpg'],



        ];

        
        return view('array', compact('array'));
    }
}