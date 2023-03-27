<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        // $employees = Employee::orderBy('id', 'DESC')->where('status', '!=', null)->get();
        $employees = User::with('Employee')->where('user_type', 2)->where('status', '!=', null)->orderBy('id', 'DESC')->get();
        // dd($employees);
        return view('employee.index', ['employees' => $employees]);
    }
}
