<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Course;

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
        //code
        return view('courses.create');
    }

    /**
    * Saving new Modules into database
    * @params $request
    * @return boolean
    */
    public function store(Request $request)
    {
        $this->validate($request, [
            'programme_id'       => 'required',
            'title'              => 'required',
            'code'               => 'required',
            'number_of_students' => 'numeric|Min:1',
            'number_of_groups'   => 'numeric|Min:1',
        ]);
        $course = new Course($request->all());
        $course->save();
        return back();
        //return redirect()->action('CoursesController@create');
    }
}
