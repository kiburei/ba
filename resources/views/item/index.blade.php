<ul id="messages" class="list-group">
    @foreach ($messages->with('user')->get() as $message)
        @include('item.show')
    @endforeach
</ul>

<hr>



