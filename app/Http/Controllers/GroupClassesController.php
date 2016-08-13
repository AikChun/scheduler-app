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
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        //search for clashing venue and time.
        $course = Course::find($request->course_id);

        $courseStartDate = $course->start_date;
        $courseEndDate   = $course->end_date;

        $coursesClashing = Course::with('classes')->where([
            ['start_date', '=>', $courseEndDate],
        ])->orWhere([
            ['end_date', '<=', $courseStartDate],
        ])->orWhere([
            ['start_date', '<=', $courseEndDate],
            ['end_date', '>=', $courseEndDate],
        ])->orWhere([
            ['start_date', '<=', $courseStartDate],
            ['end_date', '>=', $courseStartDate],
        ])->orWhere([
            ['start_date', '>=', $courseStartDate],
            ['end_date', '<=', $courseEndDate],
        ])->get()->toArray();

        if (count($coursesClashing) > 0) {
            foreach ($coursesClashing as $courseClashing) {
                $clashingClasses =  array_filter($courseClashing['classes'], function ($class) use ($request) {
                    return GroupClass::clashingVenueAndTime($class, $request->day, $request->venue, $request->start_time, $request->end_time);
                });
                if (!empty($clashingClasses) > 0) {
                    flash()->error('Error!', "You have clashing dates!");
                    return redirect()->back();
                }

                $classesLecturerTeaching = array_filter($courseClashing['classes'], function ($class) use ($request) {
                    return $class['lecturer_id'] == $request->lecturer_id;
                });


                $classes =  array_filter($classesLecturerTeaching, function ($class) use ($request) {
                    return GroupClass::clashingTime($class, $request->day, $request->start_time, $request->end_time);
                });


                if (!empty($classes) > 0) {
                    flash()->error('Error!', "You have clashing dates!");
                    return redirect()->back();
                }
            }
        }


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
