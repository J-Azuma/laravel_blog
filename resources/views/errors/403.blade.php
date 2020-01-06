@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <div class="text-center">
                    <p>You can't access to this page</p>
                    <a href="{{route('posts.index')}}" class="btn">back to home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
