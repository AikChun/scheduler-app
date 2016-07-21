<?php

namespace App\Http\Controllers;

use App\ProgrammeType;
use App\Programme;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProgrammesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $programmes = Programme::all();
        return view('programmes.index', compact('programmes'));
    }

    public function create()
    {
        $programmeTypes = ProgrammeType::all();
        return view('programmes.create', compact('programmeTypes'));
    }

    public function store(Request $request)
    {
        $programme = new Programme($request->all());
        $programme->save();
        return back();
    }
}
