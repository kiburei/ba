<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/13/15
 * Time: 9:16 AM
 */

namespace App\Repos\BongoRequest;

use App\Bongo_request;


class BongoRequestRepo {

    public function persist($request)
    {
        Bongo_request::create([

            'bongo_email' => $request->bongo_email,
            'request_link' => $this->makeRequestLink($request->bongo_email)
        ]);
    }

    private function makeRequestLInk($bongo_email)
    {
        return $bongo_email.'/request/work/';
    }

    public function all()
    {
        return  Bongo_request::all();
    }

    public function sendLink($request_id)
    {
        $request = Bongo_request::findOrFail($request_id);

        $request->update([

            'request_status' => 1

        ]);

        return $request->bongo_email;
    }

    public function confirm($bongo_email)
    {

        if(Bongo_request::where('bongo_email', '=', $bongo_email)->first() == null)
        {
            return 0;
        }
        else
        {
            return 1;
        }
    }

} 