<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexServiceController extends Controller
{
    public function index()
    {
        return view('index.service.index');
    }
}
