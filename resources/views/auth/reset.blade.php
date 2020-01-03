@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <col class="col-md-offset col-md-6">
        <nav class="panel panel-default">
            <div class="panel-heading">New Password</div>
            <div class="panel-body">
                <form action="{{route('password.update')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Mail Address</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">New Password(confirmation)</label>
                        <input type="text" id="password-confirm" name="password_confirmation" class="form-control">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </nav>
    </div>
</div>
@endsection
