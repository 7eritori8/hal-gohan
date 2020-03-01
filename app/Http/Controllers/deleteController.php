<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function index(Request $request){
        $id =$request->get("id");
        $recipe = Recipe::where('id',$id)->first();
        return view('delete',
            [
            'name'=>$recipe->name,
            'process'=>$recipe->process,
            'id' =>$recipe->id,
            'material'=>$recipe->material,
        ]
        );

    }
}
