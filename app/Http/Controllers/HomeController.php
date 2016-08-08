<?php

namespace App\Http\Controllers;

use App\Course;
use App\Http\Requests;
use App\Role;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        //$teachers = Role::where('position', 'Lecturer')->first()->users()->with('classes.course.programme')->get();
        //return $teachers;
        $courses = Course::with('classes.lecturer')->get();
        return view('dashboard', compact('courses'));
    }

    public function overview()
    {
        $teachers = Role::where('position', 'Lecturer')->first()->users()->with('classes.course.programme')->get();
        return $teachers;
    }
}
