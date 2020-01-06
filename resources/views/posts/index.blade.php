@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-2">
            @if (Auth::check())
                <a href="{{route('posts.create')}}" class="btn btn-primary">Add Post</a>
            @else
                <p><a href="{{route('login')}}" class="btn btn-primary">Login</a></p>
                <a href="{{route('register')}}" class="btn btn-primary">Register</a>
            @endif
        </div>
        <div class="col col-md-8">
            @foreach ($posts as $post)
            <nav class="panel panel-default">
                <a href="{{route('posts.show', ['post' => $post])}}" class="panel-heading link">{{$post->title}}</a>
                <div class="panel-body">
                    <p><a href="{{route('users.show', ['user' => $post->user])}}">投稿者：{{$post->user->name}}</a></p>
                    {{$post->content}}
                </div>
            </nav>
            @endforeach
            <div class="pagination">{{$posts->links()}}</div>
        </div>
        <!-- ページネーションリンクがpost一覧の下ではなく右側に表示される → col-md-8の外部にタグを描いていたことが原因-->
    </div>
</div>
@endsection
