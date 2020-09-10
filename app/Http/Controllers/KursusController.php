<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kursus;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senarai_kursus = Kursus::all();

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
        $request->validate([
            'nama' => 'required'
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->user()->id ?? null;

        Kursus::create($data);

        return redirect()->route('user.kursus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kursus = Kursus::find($id);

        return view('user.kursus.edit', compact('kursus'));
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
        $request->validate([
            'nama' => 'required'
        ]);

        $data = $request->all();

        $kursus = Kursus::find($id);
        $kursus->update($data);

        return redirect()->route('user.kursus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kursus = Kursus::find($id);
        $kursus->delete();

        return redirect()->route('user.kursus.index');
    }
}
