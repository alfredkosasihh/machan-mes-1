<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeShiftDefinitionController extends Controller
{
    public function index() 
    {
        return view('Uptime/timeshiftdefinition');
    }

    public function edit()
    {
        return view('Uptime/edit/edittimeshiftdefinition');
    }
}
