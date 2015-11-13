<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/11/15
 * Time: 9:58 AM
 */

namespace App\Repos\InvestorRequest;

use App\Investor_request;

class InvestorRequestRepo {


    public function persist($request)
    {
      Investor_request::create([

          'investor_email' => $request->investor_email,
          'request_link' => $this->makeRequestLink($request->investor_email)
      ]);
    }

    private function makeRequestLInk($investor_email)
    {
        return $investor_email.'/request/work/';
    }

    public function all()
    {
        return Investor_request::all();
    }

    public function sendLink($request_id)
    {
        $request = Investor_request::findOrFail($request_id);

        $request->update([

            'request_status' => 1

        ]);

        return $request->investor_email;
    }

    public function confirm($investor_email)
    {

        if(Investor_request::where('investor_email', '=', $investor_email)->first() == null)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }

} 