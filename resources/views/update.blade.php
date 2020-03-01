@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">修正後確認ページ</div>
                    <div class="card-body">
                        以下のように修正しました。確認してください。<br>
                        {{$name}}<br>
                        {{$process}}<br>

                        <a href="/">home</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
