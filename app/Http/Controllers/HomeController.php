<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Usually you would define a method with one view
    // public function index()
    // {
    //     return view('index');
    // }

    /* 
    Whenever you will be using one method in a controller, 
    use the invoke method
    */
    public function __invoke()
    {
        return view('index');
    }
}
