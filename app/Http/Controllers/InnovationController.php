<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repos\Innovation\InnovationRepository;
use App\Http\Requests\InnovationsRequest;
use Illuminate\Support\Facades\Session;
use App\Repos\Conversation\ConversationRepository;

class InnovationController extends Controller
{
    /**
     * This innovation repository
     * @var \App\Repos\Innovation\InnovationRepository
     */
    private $repo;

    /**
     * @param InnovationRepository $innovationRepository
     */
    public function __construct(InnovationRepository $innovationRepository)
    {

        $this->repo = $innovationRepository;
    }

    /**
     * @param $id
     * @param ConversationRepository $conversationRepository
     * @return \Illuminate\View\View
     */
    public function show($id, ConversationRepository $conversationRepository)
    {
        $innovation = $this->repo->retrieve($id);

        $check_chat = $conversationRepository->chatExists($id);

        $message =  $conversationRepository->retrieveChat($id);

        //$conversation = $conversationRepository->startConversation();

        return view('innovation.show', compact('innovation', 'id', 'check_chat', 'message'));
    }


    /**
     * Save a new innovation post
     */
    public function store(InnovationsRequest $innovationsRequest)
    {
        $this->repo->persist($innovationsRequest);

        Session::flash('flash_message', 'Awesome!! Your Innovation was submitted successfully!');

        return back();
    }

    /**
     *
     */
    public function fund($id)
    {
        $this->repo->fundInnovation($id);

        return redirect('innovation/'.$id);

    }
}
