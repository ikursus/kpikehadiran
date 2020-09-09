<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senarai_kursus = [
            ['id' => 1, 'nama' => 'Kursus PHP', 'tarikh_mula_kursus' => '2020-09-07', 'tarikh_tamat_kursus' => '2020-09-10' ],
            ['id' => 2, 'nama' => 'Kursus Flutter', 'tarikh_mula_kursus' => '2020-09-01', 'tarikh_tamat_kursus' => '2020-09-03' ],
            ['id' => 3, 'nama' => 'Kursus WordPress', 'tarikh_mula_kursus' => '2020-08-07', 'tarikh_tamat_kursus' => '2020-08-10' ]
        ];
        return view('user.kursus.senarai', compact('senarai_kursus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.kursus.baru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('user.kursus.kemaskini');
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
        return redirect()->route('user.kursus.index');
    }
}
