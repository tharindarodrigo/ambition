<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

use App\Http\Requests;

class LanguagesController extends Controller
{
    public function createLanguage(Request $request)
    {
        $professional_skill = new Language();
        $professional_skill->professional_skill = $request->get('professional_skill');
        $professional_skill->users_id = Auth::user()->id;

        if ($professional_skill->save()) {
            return $this->getLanguages();
        }
    }

    public function getLanguages()
    {
        $professional_skill = Language::where('users_id', Auth::id())->get();
        return response($professional_skill);
    }

    public function deleteLanguage(Request $request)
    {
        if (Language::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getLanguages();
        }
    }
}
