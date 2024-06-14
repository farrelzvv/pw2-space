<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;


class KelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelurahan = Kelurahan::get();
        return view('kelurahan.index', compact('kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate data
        $request->validate([
            'nama' => 'required|string',
            'kecamatan_id' => 'required|numeric',

        ]);

        // If valid save the data
        Kelurahan::create ([
            'nama' => $request->nama,
            'kecamatan_id' => $request->kecamatan_id,
            
        ]);
        // Redirect ke index
        return redirect()
        ->route('kelurahans.index')
        ->with('Success', 'Kelurahan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelurahan $kelurahan)
    {
        //
        return view('kelurahan.show', compact('kelurahan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelurahan $kelurahan)
    {
        //
        return view('kelurahan.edit', compact('kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelurahan $kelurahan)
    {
        //
        // Update the kelurahan instance
       $kelurahan->update($request->all());

       // Redirect to the index page with a success message
       return redirect()->route('kelurahans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelurahan $kelurahan)
    {
        // Delete the kelurahan instance
        $kelurahan->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('kelurahans.index');
    }
}
