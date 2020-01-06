@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <nav class="panel panel-default">
            <div class="panel-heading">{{$post->title}}</div>
            <div class="panel-body">
                {{$post->content}}
                @if (Auth::user() == $post->user)
                <p><a href="{{route('posts.edit', ['post' => $post])}}">Edit</a></p>
                <p>
                    <form action="{{route('posts.delete', ['post' => $post])}}" method="post">
                        {{csrf_field()}}
                        <input type="submit" value="delete" onclick="return confirm('Are you sure?');">
                    </form>
                </p>
                @endif
            </div>
        </nav>
    </div>
</div>
@endsection
