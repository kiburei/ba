<?php

namespace App\Http\Controllers;

use App\Repos\Innovation\InnovationRepository;
use App\Repos\Category\CategoryRepository;
use App\Http\Requests;


class DashboardController extends Controller
{
    /**
     * This innovation repository
     * @var \App\Repos\Innovation\InnovationRepository
     */
    private $innovationRepository;

    /**
     * This category repository
     * @var \App\Repos\Category\CategoryRepository
     */
    private $categoryRepository;


    /**
     * Initializer constructor for this controller class
     * @param InnovationRepository $innovationRepository
     * @param CategoryRepository $categoryRepository
     */
    function __construct(InnovationRepository $innovationRepository, CategoryRepository $categoryRepository)
    {
        $this->innovationRepository = $innovationRepository;

        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Selects what page the user sees as their homepage.
     *
     * @return Response
     */

    public function home()
    {
        if(\Auth::user()->isInvestor()){
            return $this->investor();
        }
        return $this->innovator();
    }

    /**
     * Display the innovator dashboard for innovators.
     *
     * @return Response
     */
    public function innovator()
    {
        $innovations = $this->innovationRepository->innovationsForUser(\Auth::user());

        $categories = $this->categoryRepository->getAllCategories();

        return view('home.innovator', compact('innovations', 'categories', 'fundedProjects'));
    }

    /**
     * @return \Illuminate\View\View
     */

    public function investor()
    {
        return view('home.investor');
    }

}
