@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <col class="col-md-6">
        <nav class="panel panel-default">
            <div class="panel-heading">Sign up</div>
            <div class="panel-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $message)
                    <p>{{$message}}</p>
                    @endforeach
                </div>
                @endif
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label for="email">Mail Address</label>
                        <input type="text" name="email" id="email" class="form-control" value="{{old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Password(confirmation)</label>
                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">sign up</button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
@endsection
