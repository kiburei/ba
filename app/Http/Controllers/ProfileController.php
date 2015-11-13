<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repos\ProfileRepository;

class ProfileController extends Controller
{

    public function loadProfile($innovator_id, ProfileRepository $profileRepository)
    {
        $profile = $profileRepository->load($innovator_id);

        if($profile == null)
        {
            return view('errors.404');
        }else
        {
            return view('profile.profile', compact('profile'));
        }
    }
}
