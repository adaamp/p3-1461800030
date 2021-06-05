<?php

namespace App\Http\Controllers;

use App\Models\Apotik;
use Illuminate\Http\Request;

class ApotikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apotik = Apotik::all();
        return view('0030', ['apotik' => $apotik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apotik_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Apotik::create([
            'kode_obat' => $request->kode_obat,
            'nama_obat' => $request->nama_obat,
        ]);

        return redirect('apotik');
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
        $apotik = Apotik::find($id);
        return view ('apotik_edit0030', ['apotik' => $apotik]);
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
        $apotik = Apotik::find($id);
        $apotik->kode_obat = $request->kode_obat;
        $apotik->nama_obat = $request->nama_obat;
        $apotik->save();

        return redirect('apotik');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apotik = Apotik::find($id);
        $apotik->delete();

        return redirect('apotik');
    }
}