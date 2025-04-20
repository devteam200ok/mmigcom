<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminController extends Controller
{

    public function index()
    {
        $diskTotal = disk_total_space("/");
        $diskFree = disk_free_space("/");
        $diskUsed = $diskTotal - $diskFree;

        $cpuLoad = sys_getloadavg(); // Get system load averages

        return view('admin.index')
            ->with('diskTotal', $diskTotal)
            ->with('diskFree', $diskFree)
            ->with('diskUsed', $diskUsed)
            ->with('cpuLoad', $cpuLoad);
    }
    
}