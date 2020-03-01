@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">確認ページ</div>
                    <div class="card-body">
                        {{$name}}<br>

                        材料：{{$material}}<br>

                        作り方：{{$process}}<br>


                        <a href="/">home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
