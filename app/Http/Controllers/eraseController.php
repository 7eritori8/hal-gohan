<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class eraseController extends Controller
{
    public function  index(Request $request){
        $id = $request->get("id");
        $recipe = Recipe::where('id',$id)->first();
        $recipe->delete();
        return view('erase');
    }
}
