<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseTitle;
use App\CourseCode;
use App\Http\Requests\CourseRequest;
use App\ProgrammeName;
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
    *
    */
    public function create()
    {
        // Grab all the programme names
        $programmeNames = ProgrammeName::all();

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

        Course::create($request->all());
        flash()->success('Success!', 'You have created a new Course!');
        return back();
        //return redirect()->action('CoursesController@create');
    }
}
