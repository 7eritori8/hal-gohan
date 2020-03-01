@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">削除ページ</div>
                    <div class="card-body">
                        以下の内容を本当に削除しても良いですか？？<br>
                        料理名:{{$name}}<br>
                        材料:{{$material}}<br>
                        作り方:{{$process}}<br>

                        <a href="erase?id={{$id}}">はい</a><br>
                        <a href="/">いいえ、ホームに戻る</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
