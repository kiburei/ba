@extends('......layout')


@section('content')
<form method="POST" action="{{ url('auth/register/bongo-employee') }}" class="form-signin">

    {!! csrf_field() !!}

    <h5 class="form__heading">Register as a Bongo Employee</h5>
    <div class="form_field {{ $errors->has('name') ? 'has-error' : ''}}" >
        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Name">
    </div>
    {!! $errors->first('name', '<span class="help-block">:message</span>' ) !!}

    <div class="form_field {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" value="{{ $request_link }}" class="form-control" placeholder="Email">
    </div>
    {!! $errors->first('email', '<span class="help-block">:message</span>' ) !!}

    <div class="form_field {{ $errors->has('name') ? 'has-error' : ''}}">
        <label for="password" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="password">
    </div>
    {!! $errors->first('password', '<span class="help-block">:message</span>' ) !!}

    <div class="form_field">
        <label for="password" class="sr-only">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
    </div>

    <div class="form_field">
        <button type="submit" class="cta cta_btn">Register</button>
    </div>
</form>
@stop