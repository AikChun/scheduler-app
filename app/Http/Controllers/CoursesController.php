<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;

class CoursesController extends Controller
{
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
            'number_of_students' => 'numeric',
            'number_of_groups'   => 'numeric',
        ]);
        $course = new Course($request->all());
        $course->save();
        return back();
        //return redirect()->action('CoursesController@create');

    }
}
