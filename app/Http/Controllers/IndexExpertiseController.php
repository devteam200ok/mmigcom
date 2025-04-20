<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexExpertiseController extends Controller
{
    public function overseas()
    {
        return view('index.expertise.overseas');
    }
    public function search()
    {
        return view('index.expertise.search');
    }
    public function banner()
    {
        return view('index.expertise.banner');
    }
    public function meta()
    {
        return view('index.expertise.meta');
    }
    public function youtube()
    {
        return view('index.expertise.youtube');
    }
    public function carrot()
    {
        return view('index.expertise.carrot');
    }
    public function mcn()
    {
        return view('index.expertise.mcn');
    }
    public function cpi()
    {
        return view('index.expertise.cpi');
    }
    public function appsilon()
    {
        return view('index.expertise.appsilon');
    }
}
