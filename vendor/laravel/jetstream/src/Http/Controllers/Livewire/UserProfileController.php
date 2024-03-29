<?php

namespace Laravel\Jetstream\Http\Controllers\Livewire;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserProfileController extends Controller
{
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        if(session('utype') === 'ADM')
        {
            return view('profile.admin-show', [
                'request' => $request,
                'user' => $request->user(),
            ]);
        }
        else if(session('utype') === 'USR')
        {
            return view('profile.show', [
                'request' => $request,
                'user' => $request->user(),
            ]);
        }
    }
}
