<?php

namespace App\Http\Controllers;

use App\Repos\Innovation\InnovationRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * @var InnovationRepository
     */
    private $innovationRepository;


    /**
     * Initialize necessary properties for use in the Controller.
     *
     * @param InnovationRepository $innovationRepository
     */

    function __construct(InnovationRepository $innovationRepository)
    {
        $this->innovationRepository = $innovationRepository;
    }


    /**
     * Display the innovator dashboard for innovators.
     *
     * @return Response
     */
    public function innovator()
    {
        //
    }

    /**
     * Display the investor dashboard for investors.
     *
     * @return Response
     */
    public function investor()
    {
        //
    }

}
