@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">Let's Add Post</div>
                    <div class="panel-body">
                        <div class="text-center">
                            <a href="{{route('posts.create')}}" class="btn btn-primary">
                                Add Post
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
