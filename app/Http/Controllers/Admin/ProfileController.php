<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            $user = auth()->user();

            return view('admin.profile.index',[
                'user' => $user
            ]);
        }
        else
        {
            return view('welcome');
        }

    }
    public function edit(Request $request)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            return view('admin.profile.edit', [
                'user' => $request->user(),
            ]);
        }
        else
        {
            return view('welcome');
        }

    }


    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $user = Auth::user();

        if ($user && $user->hasRole('admin'))
        {
            $request->validateWithBag('userDeletion', [
                'password' => ['required', 'current-password'],
            ]);

            $user = $request->user();

            Auth::logout();

            $user->delete();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return Redirect::to('/');
        }
        else
        {
            return view('welcome');
        }

    }
}
