<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;
use App\Models\User;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Pelanggan::with('golongan')->with('user')->get();

        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $golongans = Golongan::all();
        $users = User::all();

        return view('pelanggan.create', compact('golongans', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row = $request->validate([
            'gol_id'=> 'required',
            'pel_no'=> 'required',
            'pel_nama'=> 'required',
            'pel_alamat'=> 'required',
            'pel_hp'=> 'required',
            'pel_ktp'=> 'required',
            'pel_seri'=> 'required',
            'pel_meteran'=> 'required',
            'pel_aktif'=> 'required',
            'user_id'=> 'required',

        ]);

        //menyimpan data pelanggan
        $pelanggan = new Pelanggan($row);
        $pelanggan->save();
        return redirect()->route('pelanggan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $golongans = Golongan::all();
        $users = User::all();

        $row = Pelanggan::find($id);
        return view('pelanggan.edit', compact('row', 'golongans', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = $request->validate([
            'gol_id' => 'required',
            'pel_no' => 'required',
            'pel_nama' => 'required',
            'pel_alamat' => 'required',
            'pel_hp' => 'required',
            'pel_ktp' => 'required',
            'pel_seri' => 'required',
            'pel_meteran' => 'required',
            'pel_aktif' => 'required',
            'user_id' => 'required',
        ]);

        Pelanggan::whereId($id)->update($row);
        return redirect()->route('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelanggan::find($id);
        $row->delete();
        return redirect()->route('pelanggan');
    }
}
