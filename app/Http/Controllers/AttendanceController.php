<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::with('user')->orderBy('id', 'DESC')->get();
        return view('attendance.index', ['attendances' => $attendances]);
    }

    public function store(Request $request)
    {
        $attendance = Attendance::where('user_id', $request->user_id)->whereDate('check_in', now())->first();


        if (!$attendance) {
            $attendance = new Attendance();

            $attendance->user_id = $request->user_id;
            $attendance->check_in = now();
            $attendance->save();

            $message = 'Successfully logged in!';
        } else {
            $attendance->check_out = now();
            $attendance->status = 1;
            $attendance->save();

            $message = 'Successfully logged out!';
        }

        $response = ['data' => $attendance, 'message' => $message];

        return $response;
    }

    public function show($id)
    {
        return Attendance::where('user_id', $id)->whereDate('created_at', now())->first();
    }

    public function edit($id)
    {
        $attendance = Attendance::with('user')->find($id);
        return view('attendance.edit', ['attendance' => $attendance]);
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($id);

        $attendance->check_in = $request->check_in;
        $attendance->check_out = $request->check_out;
        $attendance->save();

        if($attendance->check_in && $attendance->check_out){
            $attendance->status = 1;
        } else $attendance->status = 0;

        $attendance->save();

        Alert::success('Attendance', 'Record updated successfully!');
        return redirect()->route('attendance.index');
    }

    public function destroy($id)
    {
        return Attendance::find($id)->delete();
    }
}
