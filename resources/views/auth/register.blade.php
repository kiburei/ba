@extends('......layout')


@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ url('/register') }}" class="form-group">
                    {!! csrf_field() !!}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}" >
                        Name
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    </div>
                    {!! $errors->first('name', '<span class="help-block">:message</span>' ) !!}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        Email
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                    </div>
                    {!! $errors->first('email', '<span class="help-block">:message</span>' ) !!}

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        Password
                        <input type="password" name="password" class="form-control">
                    </div>
                    {!! $errors->first('password', '<span class="help-block">:message</span>' ) !!}

                    <div class="form-group">
                        Confirm Password
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>

                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                        <label class="radio-inline">
                            <input type="radio" name="userCategory" id="innovatorRadio" value="1"> Innovator
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="userCategory" id="investorRadio" value="2"> Investor
                        </label>
                    </div>
                    {!! $errors->first('userCategory', '<span class="help-block">:message</span>' ) !!}

                    <div class="form-group">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

