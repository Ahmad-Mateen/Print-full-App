<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintfulController extends Controller
{
    //Callback Function

    public function printful_callback(Request $request)
    {

        dd($request->code);
    }
}
