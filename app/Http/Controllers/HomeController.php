<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(1);
        return view('home')->with(['user' => $user]);
    }

    public function updateUser(Request $request)
    {
//        dd($request->get('value'));
        $user = User::find(Auth::id());
        $data = [
            $request->get('name') => (String)$request->get('value')
        ];

        dd(print_r(explode(' ',$request->get('value'))));


        if (User::where('id',Auth::id())->update($data)) {
            return response('success');
        }
    }
}
