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

        $programmes = $programme::listUniqueProgrammeNames();

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

        //Assign programmeType->id to $request->programme_type_id
        $request->programme_type_id = $programmeType->id;

        //create Programme
        Programme::create($request->all());

        flash()->success('Success!', 'You have successfully created a new Programme!');

        return redirect()->back();
    }
}
