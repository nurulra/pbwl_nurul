<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Golongan::get();
        return view('golongan.index', compact('row'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $row['gol_kode'] = $request->gol_kode;
        $row['gol_nama'] = $request->gol_nama;

        Golongan::create($row);
        return redirect('golongan');
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
        $row = golongan::find($id);
        return view('golongan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row['gol_kode'] = $request->gol_kode;
        $row['gol_nama'] = $request->gol_nama;

        Golongan::whereId($id)->update($row);
        return redirect('golongan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = golongan::find($id);
        $row-> delete();
        return redirect('golongan');
    }
}
