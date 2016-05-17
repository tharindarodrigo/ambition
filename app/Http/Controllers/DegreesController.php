<?php

namespace App\Http\Controllers;

use App\Degree;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class DegreesController extends Controller
{
    public function createDegree(Request $request)
    {
        $degree = new Degree();
        $degree->degree = $request->get('degree');
        $degree->users_id = Auth::user()->id;

        if ($degree->save()) {
            return $this->getDegrees();
        }
    }

    public function getDegrees()
    {
        $degree = Degree::where('users_id', Auth::id())->get();
        return response($degree);
    }

    public function deleteDegree(Request $request)
    {
        if (Degree::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getDegrees();
        }
    }
}
