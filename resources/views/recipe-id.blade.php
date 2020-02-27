@extends('layouts.app')
@section('content')
料理名：{{$name}}<br>

作り方：{{$process}}<br>

<a href="updateform?id={{$id}}">
    修正する</a>
<a href="delete?id={{$id}}">削除する</a>
@endsection
