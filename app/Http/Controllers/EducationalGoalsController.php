<?php

namespace App\Http\Controllers;

use App\EducationalGoal;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class EducationalGoalsController extends Controller
{
    public function createEducationalGoal(Request $request)
    {
        $educational_goal = new EducationalGoal();
        $educational_goal->educational_goal = $request->get('educational_goal');
        $educational_goal->users_id = Auth::user()->id;

        if ($educational_goal->save()) {
            return $this->getEducationalGoals();
        }
    }

    public function getEducationalGoals()
    {
        $educational_goal = EducationalGoal::where('users_id', Auth::id())->get();
        return response($educational_goal);
    }

    public function deleteEducationalGoal(Request $request)
    {
        if (EducationalGoal::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getEducationalGoals();
        }
    }
}
