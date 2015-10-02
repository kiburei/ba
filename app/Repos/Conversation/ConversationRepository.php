<?php namespace App\Repos\Conversation;

use App\Chat;
use App\Innovation;

class ConversationRepository {

    public function startConversation($investor, $innovation)
    {
        $chat = Chat::create([
            'investor_id' => $investor,
            'innovation_id' => $innovation
        ]);

        return $chat;
    }

    public function storeComment($message, Chat $chat)
    {
        return $chat->comments()->create([
            'message' => $message
        ]);
    }

    public function retrieveChatWith($investor, Innovation $innovation)
    {
        $chat = $innovation->chats()->where('investor_id', $investor)->first();
        return $chat;
    }

    public function retrieveCommentsOf(Chat $chat)
    {
        return $chat->comments()->get();
    }
} 