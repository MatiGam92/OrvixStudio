<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function storeLead(Request $request)
    {
        Lead::create($request->all());

        return redirect('/')->with('success','¡Gracias! Te contactaremos.');
    }
}
