<?php

namespace Md\Http\Controllers;

use Illuminate\Http\Request;
use Md\Http\Requests;
use Md\Http\Controllers\Controller;
use Md\Repos\Innovation\InnovationRepository;
use Md\Http\Requests\InnovationsRequest;
use Illuminate\Support\Facades\Session;
use Md\Repos\Conversation\ConversationRepository;
use Illuminate\Support\Facades\Auth;
use Cmgmyr\Messenger\Models\Thread;

class InnovationController extends Controller
{
    /**
     * This innovation repository
     * @var \Md\Repos\Innovation\InnovationRepository
     */
    private $repo;

    /**
     * @param InnovationRepository $innovationRepository
     */
    public function __construct(InnovationRepository $innovationRepository)
    {

        $this->repo = $innovationRepository;
    }


    public function open()
    {
        $innovations = $this->repo->getAll();

        return view('innovation.open', compact('innovations'));

    }

    public function funded()
    {
        $fundedProjects = $this->repo->getFunded();

        return view('innovation.funded', compact('fundedProjects'));
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

        //$message =  $conversationRepository->retrieveChat($id);

        //$conversation = $conversationRepository->startConversation();

        $currentUserId = Auth::user()->id;

        // All threads that user is participating in
        //$threads = Thread::forUser($currentUserId)->get();

        $threads = Thread::forUser($currentUserId)
                           ->where('innovation_id', '=', $id)
                           ->latest()->get();

        $threads_count = $threads->count();

        return view('innovation.show', compact('innovation', 'id', 'check_chat', 'message', 'threads', 'threads_count', 'currentUserId'));
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
