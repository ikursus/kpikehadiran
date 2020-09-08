<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Halaman dashboard';
        $kpi_total = 3;

        // Cara pertama pass data
        // return view('user.dashboard', ['name' => $name]);
        // Cara kedua pass data
        // return view('user.dashboard')->with('name', $name)->with('title', $title);
        // Cara ketiga pass data
        return view('user.dashboard', compact('kpi_total', 'title'));
    }
}
