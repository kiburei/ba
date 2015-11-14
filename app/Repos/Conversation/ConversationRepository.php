<?php namespace App\Repos\Conversation;

use App\Chat;
use App\Innovation;

class ConversationRepository {

    public function startConversation($request, $innovation)
    {
        $chat = Chat::create([
            'investor_id' => \Auth::user()->id,
            'innovation_id' => $innovation,
            'start_message' => $request->start_message
        ]);

        return $chat;
    }

    public function storeComment($message, Chat $chat)
    {
        return $chat->comments()->create([
            'message' => $message
        ]);
    }

    public function retrieveChat($id)
    {
        $chat = Chat::where('id', '=', $id)->where('investor_id', '=', \Auth::user()->id)->first();

        return $chat;
    }

    public function retrieveCommentsOf(Chat $chat)
    {
        return $chat->comments()->get();
    }

    public function chatExists($id)
    {
       if(Chat::where('innovation_id', '=', $id)->where('investor_id', '=', \Auth::user()->id)->first() == null)
       {
           return 1;
       }
        else
        {
            return 2;
        }
    }
} 