@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <nav class="panel panel-default">
                <div class="panel-heading">{{$post->title}}</div>
                    <div class="panel-body">
                        {{$post->content}}
                        @if (Auth::user() == $post->user)
                            <p><a href="{{route('posts.edit', ['id' => $post->id])}}">Edit</a></p>
                        @endif
                    </div>
            </nav>
        </div>
    </div>
@endsection
