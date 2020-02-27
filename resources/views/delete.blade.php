@extends('layouts.app')
@section('content')
    以下の内容を本当に削除しても良いですか？？<br>
料理名{{$name}}<br>
作り方{{$process}}

<a href="erase?id={{$id}}">はい</a>
@endsection
