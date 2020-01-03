@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-6">
            <nav class="panel panel-default">
                <div class="panel-heading">Sign in</div>
                <div class="panel-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $message)
                        <p>{{$message}}</p>
                        @endforeach
                    </div>
                    @endif
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Mail Address</label>
                            <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </nav>
            <div class="text-center">
                <a href="{{route('password.request')}}">password change</a>
            </div>
        </div>
    </div>
</div>
@endsection
