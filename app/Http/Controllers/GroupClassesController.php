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
        $groupClass->hours        = $request->hours;
        $groupClass->venue        = $request->venue;
        $groupClass->end_date     = Carbon::parse($request->end_date);
        $groupClass->course_id    = $request->course_id;
        $groupClass->start_date   = Carbon::parse($request->start_date);
        $groupClass->group_name   = $request->group_name;
        $groupClass->lecturer_id  = $request->lecturer_id;
        $groupClass->group_number = $request->group_number;

        $groupClass->save();

        flash()->success('Success!', "You have created a class!");

        return redirect()->back();
    }
}
