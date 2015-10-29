<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repos\Innovation\InnovationRepository;
use App\Http\Requests\InnovationsRequest;

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
     *
     */
    public function fund($id)
    {
        $this->repo->fundInnovation($id);

        return redirect('innovation/'.$id);

    }
}
