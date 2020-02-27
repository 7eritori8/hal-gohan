@extends('layouts.app')
@section('content')
<h2>かくにんページ</h2>

料理名{{ $name }}<br>
材料{{$material}}<br>
作り方{{$process}}<br>
<form action="/recipe">
<input type="submit" value="OK">
</form>
@endsection
