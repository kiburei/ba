@extends('layout')



@section('content')

    <form method="POST" action="/auth/login" class="form-group">
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

        <div>
            <button type="submit">Login</button>
        </div>
    </form>

@stop



