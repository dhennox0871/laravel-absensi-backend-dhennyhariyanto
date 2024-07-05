<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    //index
    public function index(Request $request)
    {
        //find all attandance
        $attendances = Attendance::with('user')
        ->when($request->input('name'),
            function ($query,$name) {
                $query->whereHas('users', function ($query) use ($name) {
                    $query->where('name', 'like', "%. $name .%");
                });
            }
        )->paginate(5);
        return view('pages.absensi.index',compact('attendances'));
    }
}
