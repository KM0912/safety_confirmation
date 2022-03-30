<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SafetyInformationController extends Controller
{
    //
    public function add ()
    {
        return view("safety_registration");
    }
}
