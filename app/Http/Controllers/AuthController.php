<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function loginView()
    {

        if (Auth::check()) {
            return redirect()->route('auth.dashboard');
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('auth.dashboard');
        } else {
            return back()->with("error", "Invalide credential");
        }
    }

    public function registerView()
    {
        if (Auth::check()) {
            return redirect()->route('auth.dashboard');
        }

        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string',
            'password' => 'required|confirmed|string|min:6',
        ]);

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'password'  => Hash::make($request->password),
        ]);

        // Assign role for the user
        $user->assignRole('employee');

        // Set employee details for the user
        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->save();

        Alert::success('Congrate', 'Registration successfull!');
        Auth::login($user);
        return redirect()->route('auth.dashboard');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect()->route('auth.login_view');
    }

    public function home()
    {
        if (Auth::check()) {
            return redirect()->route('auth.dashboard');
        }
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.home');
    }
}
