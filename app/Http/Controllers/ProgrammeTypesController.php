<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\ProgrammeType;
use Illuminate\Http\Request;

class ProgrammeTypesController extends Controller
{
    //
    public function create()
    {
        return view('programme-types.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        ProgrammeType::create($request->all());

        flash()->success('Success!', 'You have successfully created a new Programme Type!');

        return redirect()->back();
    }
}
