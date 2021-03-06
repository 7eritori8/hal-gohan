<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class recipeController extends Controller
{
    public function  session(Request $request){
        $recipename =$request->session()->get("name");
        $recipeprocess =$request->session()->get("process");
        $recipematerial =$request->session()->get('material');

        $recipe = new Recipe;
        $recipe->name = $recipename;
        $recipe->process = $recipeprocess;
        $recipe->material = $recipematerial;
        $recipe->save();
        return view('recipe',[
            'name'=>$recipe->name,
            'process'=>$recipe->process,
            'material'=>$recipe->material

        ]);

    }

}
