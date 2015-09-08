<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /*
     * The method used to get the investors dashboard
     */

    public function showInvestor()
    {
        return view('dashboards.investor');
    }

    /*
     * The method used to show the innovator dashboard
     */

    public function showInnovator()
    {
        return view('dashboards.innovator');
    }
}
