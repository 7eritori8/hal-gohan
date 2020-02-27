@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    はるごはん🍚🍙
                        <a href="newrecipe" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">新しいレシピを追加</a>
                        </div>
                <?php
                foreach ($recipes as $recipe){
                    echo
//                    ＼のあとはエスケープされると文字列になる
                        "<a href=\"recipe-id?id=".
                        $recipe['id'].
                        "\">" .
                        $recipe['id'].
                        ":".
                        $recipe['name'].
                        "<br></a>";
                }
                ?>
{{--               <a href="文字列url".>link</a>}--}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
