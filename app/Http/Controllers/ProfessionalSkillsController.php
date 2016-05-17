<?php

namespace App\Http\Controllers;

use App\ProfessionalSkill;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfessionalSkillsController extends Controller
{
    public function createProfessionalSkill(Request $request)
    {
        $educational_goal = new ProfessionalSkill();
        $educational_goal->educational_goal = $request->get('educational_goal');
        $educational_goal->users_id = Auth::user()->id;

        if ($educational_goal->save()) {
            return $this->getProfessionalSkills();
        }
    }

    public function getProfessionalSkills()
    {
        $educational_goal = ProfessionalSkill::where('users_id', Auth::id())->get();
        return response($educational_goal);
    }

    public function deleteProfessionalSkill(Request $request)
    {
        if (ProfessionalSkill::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getProfessionalSkills();
        }
    }
}
