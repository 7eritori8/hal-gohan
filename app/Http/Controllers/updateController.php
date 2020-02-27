<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class updateController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->get("id");
        $recipe = Recipe::where('id',$id)->first();
        $recipename = $request->get("name");
        $recipeprocess = $request->get("process");
        $recipe->name = $recipename;
        $recipe->process = $recipeprocess;
        $recipe->update();
//        var_dump($recipe->name);
        return view('update', [
            'name' => $recipe->name,
            'process' => $recipe->process

        ]);
    }
}
