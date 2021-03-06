<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgrammeRequest;
use App\Programme;
use App\ProgrammeName;
use App\ProgrammeType;
use App\User;
use Carbon\Carbon;
use Gate;
use Illuminate\Http\Request;

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
        $programmeNames = ProgrammeName::all();

        $programmeTypes = ProgrammeType::all();

        $facilitators   = \App\Role::where('position', 'Lecturer')->first()->users;


        return view('programmes.create', compact('programmeTypes', 'programmeNames', 'facilitators'));
    }

    /**
     * store - method to persist programme data
     *
     * @param ProgrammeRequest $request - form data
     */
    public function store(ProgrammeRequest $request)
    {
        // prep data
        // Find or create programme type
        $programmeType = ProgrammeType::firstOrCreate(['name' => $request->programme_type_name]);

        // Find or create programme name
        //$programmeName = ProgrammeName::firstOrCreate(['name' => $request->name]);

        //create Programme
        $programme                      = new Programme;
        $programme->year                = $request->year;
        $programme->semester            = $request->semester;
        $programme->facilitator_id      = $request->facilitator_id;
        $programme->recess_end_date     = Carbon::parse($request->recess_end_date);
        $programme->recess_start_date   = Carbon::parse($request->recess_start_date);
        $programme->programme_type_id   = $programmeType->id;

        $programme->save();

        flash()->success('Success!', 'You have successfully created a new Programme!');

        return redirect()->back();
    }

    public function edit($programme_id)
    {
        $programmeNames = ProgrammeName::all();

        $programmeTypes = ProgrammeType::all();

        $facilitators = User::findUsersWithRole('Lecturer');

        $programme    = Programme::findOrFail($programme_id);

        return view('programmes.edit', compact('programme', 'programmeTypes', 'programmeNames', 'facilitators'));
    }

    public function update(ProgrammeRequest $request, $programme_id)
    {
        $programme                      = Programme::findOrFail($programme_id);

        $programmeType = ProgrammeType::firstOrCreate(['name' => $request->programme_type_name]);

        $programme->year                = $request->year;
        $programme->semester            = $request->semester;
        $programme->facilitator_id      = $request->facilitator_id;
        $programme->recess_end_date     = Carbon::parse($request->recess_end_date);
        $programme->recess_start_date   = Carbon::parse($request->recess_start_date);
        $programme->programme_type_id   = $programmeType->id;

        $programme->save();

        return redirect()->back();
    }

    public function use_as_template()
    {
        return view('programmes.use_as_template');
    }
}
