<?php

namespace App\Http\Controllers;

use App\Certification;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CertificationsController extends Controller
{
    public function createCertification(Request $request)
    {
        $certification = new Certification();
        $certification->certification = $request->get('certification');
        $certification->users_id = Auth::user()->id;

        if ($certification->save()) {
            return $this->getCertifications();
        }
    }

    public function getCertifications()
    {
        $certification = Certification::where('users_id', Auth::id())->get();
        return response($certification);
    }

    public function deleteCertification(Request $request)
    {
        if (Certification::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getCertifications();
        }
    }
}
