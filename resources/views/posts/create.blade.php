@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-6">
            <nav class="panel panel-default">
                <div class="panel-heading">Add Post</div>
                <div class="panel-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $message)
                                    {{$message}}
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('posts.create')}}" method="post">
                      @csrf
                      <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" name="title" id="title" class="form-cotrol">
                      </div>
                      <div class="form-group">
                          <label for="content">Content</label>
                          <textarea name="content" id="content" cols="30" rows="3" class="form-control"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection
