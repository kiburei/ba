<?php

namespace App\Http\Controllers;
use App\Http\Requests;

use App\Repos\Innovation\InnovationRepository;
use App\Http\Requests\InnovationRequest;

use Illuminate\Support\Facades\Session;

class InnovationsController extends Controller
{
    /**
     * This innovation repository
     * @var \App\Repos\Innovation\InnovationRepository
     */
    private $repo;

    /**
     * This innovation request
     * @var \App\Http\Requests\InnovationRequest
     */
    private $innovationRequest;

    /**
     * @param InnovationRequest $innovationRequest
     * @param InnovationRepository $innovationRepository
     */
    public function __construct(InnovationRequest $innovationRequest, InnovationRepository $innovationRepository)
    {
        $this->innovationRequest = $innovationRequest;

        $this->repo = $innovationRepository;
    }

    /**
     * Save a new innovation post
     */
    public function store()
    {
        $this->repo->persist($this->innovationRequest);

        Session::flash('flash_message', 'Awesome!! Your Innovation was submitted successfully!');

        return back();
    }
}
