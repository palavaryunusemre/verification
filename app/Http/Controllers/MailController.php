<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function gonder(Request $request)
    {
        $code=rand(100000,999999);
        $data=$request->input('email');
        echo $code;
        echo "<pre>";

        echo $data;


    }

    public function show()
    {

    }
}
