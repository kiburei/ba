@extends('layout')



@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="/login" class="form-group">
                    {!! csrf_field() !!}

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        Email
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                    </div>
                    {!! $errors->first('email', '<span class="help-block">:message</span>' ) !!}

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
                        Password
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    {!! $errors->first('password', '<span class="help-block">:message</span>' ) !!}

                    <div>
                        <input type="checkbox" name="remember"> Remember Me
                    </div>
                    </br>
                    <div>
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop



