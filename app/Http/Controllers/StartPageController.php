<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Report;
use App\Thing;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Validator;

class StartPageController extends Controller
{
    public function index()
    {
        if (Auth::guest())
        {
            return view('index');
        }
        else
        {
            return redirect()->route('report.index');
        }
    }
}