<?php

namespace App\Http\Controllers;
use Gate;
use App\ProgrammeType;
use App\Programme;
use Illuminate\Http\Request;
use App\Http\Requests\ProgrammeRequest;

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
        $programme = new Programme;
        if(Gate::denies('update', $programme )) {
            abort(403, 'Nope.');
        }

        $programmes = Programme::listUniqueProgrammeNames();

        $programmeTypes = ProgrammeType::all();

        return view('programmes.create', compact('programmeTypes', 'programmes'));
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

        //create Programme

        $programme                      = new Programme;
        $programme->name                = $request->name;
        $programme->year                = $request->year;
        $programme->semester            = $request->semester;
        $programme->facilitator_id      = $request->facilitator_id;
        $programme->recess_end_date     = Carbon::parse($request->recess_end_date);
        $programme->recess_start_date   = Carbon::parse($request->recess_start_date);
        $programme->programme_type_name = $programmeType->id;

        $programme->save();

        flash()->success('Success!', 'You have successfully created a new Programme!');

        return redirect()->back();
    }
}
