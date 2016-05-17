<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class SchoolsController extends Controller
{
    public function createSchool(Request $request)
    {
        $school = new School();
        $school->school = $request->get('school');
        $school->users_id = Auth::user()->id;

        if ($school->save()) {
            return $this->getSchools();
        }
    }

    public function getSchools()
    {
        $school = School::where('users_id', Auth::id())->get();
        return response($school);
    }

    public function deleteSchool(Request $request)
    {
        if (School::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getSchools();
        }
    }
}
