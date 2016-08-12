<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GroupClassRequest;
use App\Course;
use App\GroupClass;
use App\User;
use App\Http\Requests;
use Carbon\Carbon;
use App\Venue;

class GroupClassesController extends Controller
{
    //
    public function create()
    {
        // I want to
        // grab all the courses available
        // grab all the lecturers

        $courses = Course::all();

        $lecturers = User::findAllLecturers();

        $venues = Venue::all();

        return view('group_classes.create', compact('courses', 'lecturers', 'venues'));
    }

    public function store(GroupClassRequest $request)
    {
        $venue = Venue::firstOrCreate(['name' => $request->venue]);

        $groupClass               = new GroupClass;

        $groupClass->total_hours  = $request->total_hours;
        $groupClass->venue        = $venue->name;
        $groupClass->end_time     = $request->end_time;
        $groupClass->course_id    = $request->course_id;
        $groupClass->start_time   = $request->start_time;
        $groupClass->group_name   = $request->group_name;
        $groupClass->lecturer_id  = $request->lecturer_id;
        $groupClass->group_number = $request->group_number;
        $groupClass->day          = $request->day;

        $groupClass->save();

        flash()->success('Success!', "You have created a class!");

        return redirect()->back();
    }
}
