<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function discipline()
    {

        return view('site.discipline.discipline');

    }


    public function participer()
    {

        return view('site.discipline.participer');

    }
}
