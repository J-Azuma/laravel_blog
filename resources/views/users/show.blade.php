@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-4">
            <table class="table">
                <tr>
                    <th>User Profile</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>Posts</td>
                    <td>{{$posts->count()}}</td>
                </tr>
            </table>
            <a href="{{route('posts.create')}}" class="btn btn-primary">Add Post</a>
        </div>
        <div class="col col-md-8">
            <h2>all Posts</h2>
            @foreach ($posts as $post)
            <nav class="panel panel-default">
                <a href="{{route('posts.show', ['post' => $post])}}" class="panel-heading link">{{$post->title}}:
                    {{$post->created_at}}</a>
                <div class="panel-body">
                    {{$post->content}}
                </div>
            </nav>
            @endforeach
            <div class="pagination">{{$posts->links()}}</div>
        </div>
    </div>
</div>
@endsection
