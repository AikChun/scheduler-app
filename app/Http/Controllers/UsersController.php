<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use \DB;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Show list of users
    */
    public function index()
    {
        $users = DB::table('users')->paginate(10);
        return view('users.index', compact('users'));
    }
}
