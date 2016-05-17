<?php

namespace App\Http\Controllers;

use App\Interest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class InterestsController extends Controller
{
    public function createInterest(Request $request)
    {
        $employment = new Interest();
        $employment->interest = $request->get('interest');
        $employment->users_id = Auth::user()->id;

        if ($employment->save()) {
            return $this->getInterests();
        }
    }

    public function getInterests()
    {
        $interests = Interest::where('users_id', Auth::id())->get();
        return response($interests);
    }

    public function deleteInterest(Request $request)
    {
        if (Interest::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getInterests();
        }
    }
}
