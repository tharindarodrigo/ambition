<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LanguagesController extends Controller
{
    public function createLanguage(Request $request)
    {
        $language = new Language();
        $language->language = $request->get('language');
        $language->users_id = Auth::user()->id;

        if ($language->save()) {
            return $this->getLanguages();
        }
    }

    public function getLanguages()
    {
        $language = Language::where('users_id', Auth::id())->get();
        return response($language);
    }

    public function deleteLanguage(Request $request)
    {
        if (Language::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getLanguages();
        }
    }
}
