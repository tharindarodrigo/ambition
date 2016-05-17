<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class MembershipsController extends Controller
{
    public function createMembership(Request $request)
    {
        $membership = new Membership();
        $membership->membership = $request->get('membership');
        $membership->users_id = Auth::user()->id;

        if ($membership->save()) {
            return $this->getMemberships();
        }
    }

    public function getMemberships()
    {
        $membership = Membership::where('users_id', Auth::id())->get();
        return response($membership);
    }

    public function deleteMembership(Request $request)
    {
        if (Membership::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getMemberships();
        }
    }
}
