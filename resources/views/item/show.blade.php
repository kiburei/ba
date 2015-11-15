<p class="messages">

    @if($message->sender_id == \Auth::user()->id)

    <span style="color: green;">You : </span>

    @elseif($message->sender_id != \Auth::user()->id)

    <span style="color: green;">{{$message->user->name}}:</span>

    @endif

    {{ $message->title }}

</p>





