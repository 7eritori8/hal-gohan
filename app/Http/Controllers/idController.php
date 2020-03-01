<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class idController extends Controller
{
    public function index(Request $request){
//        get・・・HTTPgetメソッド「ください」の意味　request->getと$_getは別物。$_getはformで入れた内容を取り出す。
//とってきたidを$idに代入
        $id =$request->get('id');
//        $idを使ってRecipeを検索　firstで一個だけ取ってくる
        $recipe = Recipe::where('id',$id)->first();
//        recipe-idで表示
        return view('recipe-id',[
//            する時に１５行目で取ってきた$recipe->nameと$recipe->processを送る
            'name'=>$recipe->name,
            'process'=>$recipe->process,
            'material'=>$recipe->material,
            'id' =>$recipe->id
        ]);

}
}
