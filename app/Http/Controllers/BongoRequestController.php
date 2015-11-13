<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BongoRequestRequest;

use App\Repos\BongoRequest\BongoRequestRepo;

class BongoRequestController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Get the send request view
     * @return \Illuminate\View\View
     */
    public function getSendRequest()
    {
        return view('request.send.bongo');
    }

    /**
     * Save the request to the database
     */
    public function persistRequest(BongoRequestRequest $bongoRequestRequest, BongoRequestRepo $bongoRequestRepo)
    {
        $bongoRequestRepo->persist($bongoRequestRequest);

        return view('request.received');
    }

    public function getAll(BongoRequestRepo $bongoRequestRepo)
    {
        $requests = $bongoRequestRepo->all();

        return view('request.bongo.all', compact('requests'));
    }

    public function bongoSendLink($request_id, BongoRequestRepo $bongoRequestRepo)
    {
        $request_link = $bongoRequestRepo->sendLink($request_id);

        return view('request.bongo.link', compact('request_link'));
    }

    public function bongoConfirmLink($request_link, BongoRequestRepo $bongoRequestRepo)
    {

        $confirm = $bongoRequestRepo->confirm($request_link);

        if($confirm == 0)
        {
            return view('errors.404');
        }
        else
        {
            return view('request.bongo.register', compact('request_link'));
        }
    }

}
