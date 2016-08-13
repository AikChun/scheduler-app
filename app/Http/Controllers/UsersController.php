<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Role;
use App\User;
use App\GroupClass;
use Mail;
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

    public function send_schedule(User $user)
    {
        //$classes = GroupClass::where('lecturer_id', $user->id)->whereHas('course.programme', function($query){
        //    $query->where('year', date('Y'));
        //})->get();
        $classes = GroupClass::where('lecturer_id', $user->id)->get();

        Mail::send('emails.schedule.list', compact('classes'), function($message) {
            $message->from('scheduler@DONOTREPLY.com');
            $message->to('aikchun616@gmail.com');
        });

        flash('You have emailed the schedule!');
        return redirect('/users');
    }
}
