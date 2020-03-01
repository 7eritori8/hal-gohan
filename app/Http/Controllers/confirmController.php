<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class confirmController extends Controller
{
//    ２つ目の引数に$requestでformから送信されたデータを入手できる
    public function index(Request $request){
//            var_dump($request->all());
            $name = $request->get("name");
            $material = $request->get("material");
            $process = $request->get("process");
            $request->session()->put("name", $name);
            $request->session()->put("process",$process);
            $request->session()->put("material",$material);

//            validateの設定:requiredは入力必須を設定それぞれの項目に
            $this->validate($request,[
                'name'=>'required',
                'material'=>'required',
                'process'=>'required'
            ],[
//                ３つ目の引数に　項目名.どのルール（requireとか）かと表示するエラ〜メッセージ。
                    'name.required' => '料理名は必須項目です',
                    'material.required' => '材料は必須項目です',
                    'process.required' =>'作り方は必須項目です'
                ]
                );



        return view('confirm',[
            "name" => $name,
            "material" => $material,
            "process" =>$process
        ]
        );
    }

}
