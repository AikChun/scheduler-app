<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\GroupClass;
use App\User;
use App\Http\Requests;

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

        return view('group_classes.create', compact('courses', 'lecturers'));
    }

    public function store(GroupClassRequest $request)
    {

    }
}
