<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Workout;
use Illuminate\Http\Request;

class AccounteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $workouts = Workout::where('userid', auth()->user()->id)->orderBy('id', 'desc')->get();

        return view('account.index')->with(
            [
                'workouts' => $workouts
            ]
        );
    }
}
