<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\UserDetails;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->where('status', '!=', null)->get();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserRequest $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->user_type = $request->user_type;
        $user->user_type = $request->user_type;
        $user->save();

        if ($user->user_type == 2) {
            $user->assignRole('employee');
            $employee = new Employee();

            $employee->user_id = $user->id;
            $employee->address = $request->address;
            $employee->emergency_contact = $request->emergency_contact;

            if ($request->file('profile_image')) {
                // Pass folder_name and file as param
                $path = uploadFile('employee/profile_image', $request->file('profile_image'));
                $employee->profile_image = $path;
            }
            $employee->save();
        } else if ($user->user_type == 1) {
            $user->assignRole('admin');
            $userDetails = new UserDetails();

            $userDetails->user_id = $user->id;
            $userDetails->address = $request->address;
            $userDetails->emergency_contact = $request->emergency_contact;

            if ($request->file('profile_image')) {
                // Pass folder_name and file as param
                $path = uploadFile('admin/profile_image', $request->file('profile_image'));
                $userDetails->profile_image = $path;
            }
            $userDetails->save();
        }

        $response = ['message' => 'User stored successfully!', 'data' => $user];
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->route('auth.dashboard');
        return back();
        // return $response;
        // dd($request->all());
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function test()
    {
        dd('ok');
    }

    public function loggedInUser()
    {
        $user = auth()->user();
        $roles = $user->getRoleNames();

        return $roles;
    }
}
