<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class updateformController extends Controller
{
    //
    public function index(Request $request){
        $id =$request->get("id");
        $recipe = Recipe::where('id',$id)->first();


       return view('updateform',[
           'name'=>$recipe->name,
           'process'=>$recipe->process,
           'id'=>$recipe->id]);
    }
}

//ここでやりたいことは、update（修正機能）の処理
//そのためには、idで検索して（ $recipe = Recipe::where('id',$id)->first();が使える？？？？）
//フォームに初期値入れて（value=""で設定）、
//update関数で更新・・・
//てかてか、ページの末尾もid=で指定したいのだ、これはrecipe-idのページで修正するのリンク先で設定するんだけど＿＿
