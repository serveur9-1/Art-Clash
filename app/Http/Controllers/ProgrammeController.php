<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function programme()
    {

        return view('site.programme.programme');

    }
}
