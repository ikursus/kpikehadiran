<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Kursus;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Halaman dashboard';
        //$kpi_total = Kursus::where('user_id', '=', auth()->user()->id);
        //$kpi_total = Kursus::where('user_id', '=', Auth::id())->sum('jumlah_hari');
        $kpi_total = auth()->user()->kursus->sum('jumlah_hari');


        // Cara pertama pass data
        // return view('user.dashboard', ['name' => $name]);
        // Cara kedua pass data
        // return view('user.dashboard')->with('name', $name)->with('title', $title);
        // Cara ketiga pass data
        return view('user.dashboard', compact('kpi_total', 'title'));
    }
}
