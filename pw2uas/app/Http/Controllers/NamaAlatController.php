<?php

namespace App\Http\Controllers;

use App\Models\nama_alat;
use Illuminate\Http\Request;

class NamaAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nama_alat = nama_alat::all();
        return view('nama_alat.index')->with('nama_alat', $nama_alat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nama_alat  $nama_alat
     * @return \Illuminate\Http\Response
     */
    public function show(nama_alat $nama_alat)
    {
        // 
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nama_alat  $nama_alat
     * @return \Illuminate\Http\Response
     */
    public function edit(nama_alat $nama_alat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nama_alat  $nama_alat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nama_alat $nama_alat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nama_alat  $nama_alat
     * @return \Illuminate\Http\Response
     */
    public function destroy(nama_alat $nama_alat)
    {
        //
    }
}
