<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseTitle;
use App\CourseCode;
use App\Http\Requests\CourseRequest;
use App\Programme;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    /**
    * Method for adding new module
    */
    public function create()
    {
        // Grab all the programme names
        $programmes = Programme::all();

        // Grab all the course titles
        $courseTitles = CourseTitle::all();

        // Grab all the course codes
        $courseCodes = CourseCode::all();

        return view('courses.create', compact('programmes', 'courseTitles', 'courseCodes'));
    }

    /**
    * Saving new Modules into database
    * @params $request
    * @return boolean
    */
    public function store(CourseRequest $request)
    {
        $courseCode                           = CourseCode::firstOrCreate(['code' => $request->code]);
        $courseTitle                          = CourseTitle::firstOrCreate(['title' => $request->title]);

        $course                               = new Course;
        $course->code                         = $request->code;
        $course->title                        = $courseTitle->title;
        $course->end_date                     = Carbon::parse($request->end_date);
        $course->start_date                   = Carbon::parse($request->start_date);
        $course->programme_id                 = $request->programme_id;
        $course->number_of_groups             = $request->number_of_groups;
        $course->number_of_students           = $request->number_of_students;
        $course->estimated_number_of_students = $request->number_of_students;
        if(!$course->save()) {
            flash()->error('Error!', 'something went wrong');
        } else {
            flash()->success('Success!', 'You have created a new Course!');
        }
        return back();
        //return redirect()->action('CoursesController@create');
    }

    public function edit($course_id) {
        // Grab all the programme names
        $programmes = Programme::all();

        // Grab all the course titles
        $courseTitles = CourseTitle::all();

        // Grab all the course codes
        $courseCodes = CourseCode::all();

        $course =  Course::where('id', $course_id)->with('programme.programme_type')->first();

        return view('courses/edit', compact('course', 'programmes', 'courseTitles', 'courseCodes'));
    }

    public function update(Request $request, $course_id)
    {
        $course                     = Course::findOrFail($course_id);

        $course->programme_id       = $request->programme_id;
        $course->title              = $request->title;
        $course->code               = $request->code;
        $course->number_of_students = $request->number_of_students;
        $course->number_of_groups   = $request->number_of_groups;
        $course->start_date         = Carbon::parse($request->start_date);
        $course->end_date           = Carbon::parse($request->end_date);

        $course->save();

        return redirect()->back();
    }
}
