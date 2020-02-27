@extends('layouts.app')
@section('content')
    新規作成ぺーじ

<form  method="post" action="/confirm">
    {{ csrf_field() }}
    <p>料理名<spam>*</spam></p> <input type="text" name="name">
    <p>材料<spam>*</spam></p><textarea name="material"></textarea>
    <p>作り方<spam>*</spam></p><textarea name ="process"></textarea>


    <input type="submit" value="完成">
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
