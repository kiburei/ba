<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::login($this->create($request->all()));

        if($request->url() == $_SERVER['HTTP_ORIGIN']. "/auth/register/innovator")
        {
           return redirect('dashboard/innovator');
        }

        elseif($request->url() == $_SERVER['HTTP_ORIGIN']. "/auth/register/investor")
        {
            return redirect('dashboard/investor');
        }

        elseif($request->url() == $_SERVER['HTTP_ORIGIN']. "/auth/register/bongo-employee")
        {
            return redirect('dashboard/bongo/admin');
        }
    }
}
