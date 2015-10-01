@extends('layout')

@section('content')
	<form method="POST" action="/login" class="form-signin">
		<h3 class="form__heading">Login</h3>
		{!! csrf_field() !!}

		<div class="form_field {{ $errors->has('email') ? 'has-error' : ''}}">
			<label for="email" class="sr-only">Email address</label>
			<input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
		</div>
		{!! $errors->first('email', '<span class="help-block">:message</span>' ) !!}

		<div class="form_field {{ $errors->has('password') ? 'has-error' : ''}}">
			<label for="password" class="sr-only">Password</label>
			<input type="password" name="password" id="password" class="form-control" placeholder="password">
		</div>
		{!! $errors->first('password', '<span class="help-block">:message</span>' ) !!}

		<div class="checkbox">
			<label>
				<input type="checkbox" value="remember"> Remember me
			</label>
		</div>
		<button type="submit" class="cta cta_btn">Login</button>
	</form>
@stop



