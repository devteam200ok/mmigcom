<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPortfolioController extends Controller
{
    public function list($id)
    {
        return view('index.portfolio.list')
            ->with('list_id', $id);
    }
    public function data()
    {
        return view('index.portfolio.data');
    }
    public function custom()
    {
        return view('index.portfolio.custom');
    }
    public function display_select(Request $request)
    {
        $returnHTML = view('inc.display')->with('id', $request->id)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
    public function portfolio_select(Request $request)
    {
        $returnHTML = view('inc.portfolio')->with('id', $request->id)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
}
