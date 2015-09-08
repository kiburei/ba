<?php namespace App\Repos\Comments;

use App\Chat;
use App\Innovation;

class CommentRepository {

    public function startConversation($investor, $innovator)
    {
        $chat = Chat::create([
            'investor_id' => $investor,
            'innovator_id' => $innovator
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