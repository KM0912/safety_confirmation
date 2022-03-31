<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SafetyInformation;
use Illuminate\Support\Facades\Auth;

class SafetyInformationController extends Controller
{
    //
    public function add ()
    {
        return view("safety_registration");
    }

    //
    public function store (Request $request)
    {
        $user = Auth::user();

        $inputs = $request->all();
        SafetyInformation::create([
            'user_id' => $user->id,
            'comment' => $inputs['comment'],
        ]);

        return view("safety_registration");
    }

}
