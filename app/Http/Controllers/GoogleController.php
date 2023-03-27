<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);
                return redirect()->route('auth.dashboard');
            } else {
                $newUser = User::updateOrCreate(
                    ['email' => $user->email],
                    [
                        'name' => $user->name,
                        'google_id' => $user->id,
                        'password' => encrypt('password')
                    ]
                );

                // Assign role for the user
                $newUser->assignRole('employee');

                // Set employee details for the user
                $employee = new Employee();
                $employee->user_id = $newUser->id;
                $employee->save();

                Auth::login($newUser);

                return redirect()->route('auth.dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
