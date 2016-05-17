<?php

namespace App\Http\Controllers;

use App\LivedPlace;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LivedPlacesController extends Controller
{
    public function createLivedPlace(Request $request)
    {
        $lived_place = new LivedPlace();
        $lived_place->lived_place = $request->get('lived_place');
        $lived_place->users_id = Auth::user()->id;

        if ($lived_place->save()) {
            return $this->getLivedPlaces();
        }
    }

    public function getLivedPlaces()
    {
        $lived_place = LivedPlace::where('users_id', Auth::id())->get();
        return response($lived_place);
    }

    public function deleteLivedPlace(Request $request)
    {
        if (LivedPlace::where('id', $request->get('id'))->where('users_id', Auth::id())->delete()) {
            return $this->getLivedPlaces();
        }
    }
}
