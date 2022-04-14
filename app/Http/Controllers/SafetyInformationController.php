<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SafetyInformation;
use App\Models\SafetyInformationHistory;
use Illuminate\Support\Facades\Auth;

class SafetyInformationController extends Controller
{
    //
    public function create ()
    {
        return view("safety_registration");
    }

    //
    public function safety_status ()
    {

        $status = SafetyInformation::all();

        return view("safety_status", compact('status'));
    }

    //
    public function store (Request $request)
    {
        $user = Auth::user();
        $inputs = $request->all();
        
        // 安否状況を更新 or 作成
        SafetyInformation::updateOrCreate(['user_id' => $user->id], $inputs);

        // 安否状況の履歴に登録
        $inputs = ['user_id' => $user->id] + $inputs;   // user_idはPOSTしていないので配列に追加
        SafetyInformationHistory::create($inputs);

        return redirect()->route('safety_status');
    }

}
