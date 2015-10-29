<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repos\Innovation\InnovationRepository;
use App\Http\Requests\InnovationsRequest;
use Illuminate\Support\Facades\Session;

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
     * Get a single innovation
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $innovation = $this->repo->retrieve($id);

        return view('innovation.show', compact('innovation'));
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
