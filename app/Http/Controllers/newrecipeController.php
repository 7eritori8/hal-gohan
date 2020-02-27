<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newrecipeController extends Controller
{
    public function index(){
        return view('new');
}
}
