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
        
        $total = $request->input('total') ?? 3;

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
        //Validate data dari borang
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|confirmed',
            'jawatan' => 'required',
            'bahagian' => 'required',
            'status' => ['required', 'in:aktif,tutup'],
        ]);

        // Dapatkan data daripada borang untuk disimpan ke dalam DB
        // $data = $request->all();
        $data = $request->only([
            'nama',
            'email',
            'jawatan',
            'bahagian',
            'status',
            'telefon'
        ]);

        $data['password'] = bcrypt($request->input('password'));

        DB::table('users')->insert($data);

        return redirect()->route('users.index');
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
        //Validate data dari borang
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'jawatan' => 'required',
            'bahagian' => 'required',
            'status' => ['required', 'in:aktif,tutup'],
        ]);

        // Dapatkan data daripada borang untuk disimpan ke dalam DB
        // $data = $request->all();
        $data = $request->only([
            'nama',
            'email',
            'jawatan',
            'bahagian',
            'status',
            'telefon'
        ]);

        // Sekiranya ruangan password TIDAK kosong, baru dapatkan password
        // dan dimasukka ke dalam data untuk disimpan ke dalam table users
        if ( !is_null($request->input('password')) )
        {
            // Validate data password supaya disahkan (confirm)
            $request->validate([
                'password' => 'confirmed'
            ]);
            // Ecnrypt password dan masukkan ke variable $data
            $data['password'] = bcrypt($request->input('password'));
        }

        // Simpan data ke dalam database
        DB::table('users')->where('id', $id)->update($data);

        // Redirect ke halaman senarai pengguna
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cari data dari table users dan hapuskan data tersebut
        DB::table('users')->where('id', '=', $id)->delete();

        return redirect()->route('users.index');
    }
}
