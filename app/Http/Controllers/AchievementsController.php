<?php

namespace App\Http\Controllers;

use App\Achievement;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AchievementsController extends Controller
{
    public function createInterest(Request $request)
    {
        $achievement = new Achievement();
        $achievement->achievement = $request->get('achievement');
        $achievement->users_id = Auth::user()->id;

        if ($achievement->save()) {
            return $this->getInterests();
        }
    }

    public function getInterests()
    {
        $achievement = Achievement::where('users_id', Auth::id())->get();
        return response($achievement);
    }

    public function deleteInterest(Request $request)
    {
        if (Achievement::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getInterests();
        }
    }
}
