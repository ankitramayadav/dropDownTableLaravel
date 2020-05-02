<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminsEvent(Request $request)
    {
        return view('welcome');
    }


    public function postAdminsEvent(Request $request)
    {
        $course = $request->input('course');
        $event = $request->input('event');
        //return $course.$event;
        $request->session()->put('adminCourse', $course);
        $request->session()->put('adminEvent', $event);

        $array_object = DB::select("SELECT * FROM student_login");
        $data = json_decode(json_encode($array_object));
        //return $data;
        return view('adminStudentDetails', ['data' => $data]);
    }


    public function showAdminStudentDetails(Request $request)
    {
        $course = $request->session()->get('adminCourse', null);
        $event = $request->session()->get('adminEvent', null);
        //print($course);
        //print($event);
        $array_object = DB::select("SELECT * FROM student_login");
        $data = json_decode(json_encode($array_object));
        //return $data;
        return view('adminStudentDetails', ['data' => $data]);
    }
}
