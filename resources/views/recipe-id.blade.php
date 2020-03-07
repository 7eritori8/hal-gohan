@extends('layouts.app')
@section('title')
    はるごはん　{{$name}}
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">詳細</div>
                    <div class="card-body">
                        料理名：{{$name}}<br>
                        材料名：{{$material}}<br>
                        作り方：{{$process}}<br>

                        <a href="updateform?id={{$id}}">
                            修正する</a>
                        <a href="delete?id={{$id}}">削除する</a>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
