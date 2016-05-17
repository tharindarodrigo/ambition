<?php

namespace App\Http\Controllers;

use App\Employment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class EmploymentsController extends Controller
{
    public function createEmployment(Request $request)
    {
        $employment = new Employment();
        $employment->employment = $request->get('employment');
        $employment->users_id = Auth::user()->id;

        if ($employment->save()) {
            return $this->getEmployments();
        }
    }

    public function getEmployments()
    {
        $employments = Employment::where('users_id', Auth::id())->get();
        return response($employments);
    }

    public function deleteEmployment(Request $request)
    {
        if (Employment::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getEmployments();
        }
    }


}
