<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasien = Pasien::get();
        return view ('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new pasien
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Cek Validasi 
        $request->validate(
            [
            'kode' => 'required|string',
            'nama' => 'required|string',
            'tmp_lahir' => 'required|string',
            'tgl_lahir' => 'required|date',
            'gender' => 'required|string',
            'email' => 'required|string',
            'alamat' => 'required|string',
            ]
        );
        //Kirim Data Ke DataBase
        Pasien::create ([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);
        // Redirect ke index
        return redirect()->route('pasien.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        // Pass the Pasien instance to the view
        return view('pasien.edit', compact('pasien'));
    }

        

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
       // Update the Pasien instance
       $pasien->update($request->all());

       // Redirect to the index page with a success message
       return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        // Delete the Pasien instance
        $pasien->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('pasien.index');
    }
}
