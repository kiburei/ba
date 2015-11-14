<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\ChatRequest;

use App\Repos\Conversation\ConversationRepository;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store($id, ChatRequest $chatRequest, ConversationRepository $conversationRepository)
    {
        $chat = $conversationRepository->startConversation($chatRequest, $id);

        return view('chat.chat', compact('chat'));

    }
}
