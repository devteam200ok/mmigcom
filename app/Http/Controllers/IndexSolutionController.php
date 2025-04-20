<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexSolutionController extends Controller
{
    public function index()
    {
        return view('index.solution.index');
    }
}
