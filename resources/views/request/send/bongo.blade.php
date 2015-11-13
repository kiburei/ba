<form method="post" action="/request/bongo/send/">

    {!! csrf_field() !!}

    <label for="bongo_email">Your Email</label>

    <input type="email" name="bongo_email" />

    {!! $errors->first('bongo_email', '<span class="help-block">:message</span>' ) !!}

    <button type="submit">Submit</button>

</form>