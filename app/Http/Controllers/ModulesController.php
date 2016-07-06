<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Module;

class ModulesController extends Controller
{
    //
    /**
    * Method for adding new module
    * 
    */
    public function create()
    {
        //code
        return view('module.create');
    }

    /**
    * Saving new Modules into database
    * @params $request
    * @return boolean
    */
    public function store(Request $request)
    {
        $module = new Module($request->all());

        $module->save();

        return back();

    }
    
    
}
