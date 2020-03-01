{{--updateform(修正用入力ページ)--}}
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">修正ページ</div>
                    <div class="card-body">
                        <form method="post" action="/update">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$id}}">
                            <p>料理名<span>*</span></p> <input type="text" name="name" value="{{$name}}">
                            <p>材料<span>*</span></p><textarea name="material"></textarea>
                            <p>作り方<span>*</span></p><textarea name="process">"{{$process}}"</textarea>


                            <input type="submit" value="修正">
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>
@endsection
