<form method="post" action="/request/investor/send/">

    {!! csrf_field() !!}

    <label for="investor_email">Your Email</label>

    <input type="email" name="investor_email" />

    {!! $errors->first('investor_email', '<span class="help-block">:message</span>' ) !!}

    <button type="submit">Submit</button>

</form>