<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
     * Show the profile inf
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __invoke()
    {
        return view('profile', ['user' => Auth::user()]);
    }
}
