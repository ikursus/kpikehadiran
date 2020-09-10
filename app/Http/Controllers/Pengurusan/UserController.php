<?php

namespace App\Http\Controllers\Pengurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $senarai_pengguna = DB::table('users')->get();
        //$senarai_pengguna = DB::table('users')->paginate(2);
        
        //$sql = "SELECT * FROM users WHERE name="john" AND email="john@gmail.com" LIMIT 1"
        
        $total = $request->input('total') ?? 2;

        $senarai_pengguna = DB::table('users')
        ->orderBy('id', 'desc')
        ->select('id', 'nama', 'email')
        ->paginate($total);

        // Cara dapatkan single data
        // $senarai_pengguna = DB::table('users')
        // ->orderBy('id', 'desc')
        // ->where('nama', '=', 'ahmad')
        //->whereDate('created_at', '>=', '2020-07-01')
        // ->select('id', 'nama', 'email')
        // ->first();

        return view('pengurusan.pengguna.senarai', compact('senarai_pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengurusan.pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            //'nama' => ['required', 'min:3']
            'nama' => 'required|min:3',
            'password' => ['required', 'min:5', 'confirmed']
        ]);


        $data = $request->all();
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pengurusan.pengguna.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Dapatkan rekod user berdasarkan $id daripada table users
        $pengguna = DB::table('users')
        ->where('id', '=', $id)
        ->first();

        if(is_null($pengguna))
        {
            return redirect()->route('users.index');
        }

        return view('pengurusan.pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('users.index');
    }
}
