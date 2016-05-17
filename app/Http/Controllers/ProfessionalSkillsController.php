<?php

namespace App\Http\Controllers;

use App\ProfessionalSkill;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProfessionalSkillsController extends Controller
{
    public function createProfessionalSkill(Request $request)
    {
        $professional_skill = new ProfessionalSkill();
        $professional_skill->professional_skill = $request->get('professional_skill');
        $professional_skill->users_id = Auth::user()->id;

        if ($professional_skill->save()) {
            return $this->getProfessionalSkills();
        }
    }

    public function getProfessionalSkills()
    {
        $professional_skill = ProfessionalSkill::where('users_id', Auth::id())->get();
        return response($professional_skill);
    }

    public function deleteProfessionalSkill(Request $request)
    {
        if (ProfessionalSkill::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getProfessionalSkills();
        }
    }
}
