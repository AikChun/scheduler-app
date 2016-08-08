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
        $programmeNames = Programme::all();

        // Grab all the course titles
        $courseTitles = CourseTitle::all();

        // Grab all the course codes
        $courseCodes = CourseCode::all();
        return view('courses.create', compact('programmeNames', 'courseTitles', 'courseCodes'));
    }

    /**
    * Saving new Modules into database
    * @params $request
    * @return boolean
    */
    public function store(CourseRequest $request)
    {
        $courseCode                           = CourseCode::firstOrCreate(['code' => $request->code]);

        $course                               = new Course;
        $course->code                         = $request->code;
        $course->title                        = $request->title;
        $course->end_date                     = Carbon::parse($request->end_date);
        $course->start_date                   = Carbon::parse($request->start_date);
        $course->programme_id                 = $request->programme_id;
        $course->number_of_groups             = $request->number_of_groups;
        $course->number_of_students           = $request->number_of_students;
        $course->estimated_number_of_students = $request->number_of_students;
        $course->save();
        flash()->success('Success!', 'You have created a new Course! start date: '. $request->start_date. 'end date: ' . $request->end_date);
        return back();
        //return redirect()->action('CoursesController@create');
    }
}
