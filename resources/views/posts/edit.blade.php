@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-6">
            <nav class="panel panel-default">
                <div class="panel-heading">Edit Post</div>
                <div class="panel-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $message)
                        <p>{{$message}}</p>
                        @endforeach
                    </div>
                    @endif
                    <form action="{{route('posts.edit', ['post' => $post])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{old('title')??$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea type="text" name="content" id="content" class="form-control"
                             cols="30" rows="3" value="{{old('content')??$post->content}}"></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection
