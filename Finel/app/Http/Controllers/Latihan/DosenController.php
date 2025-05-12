<?php

namespace App\Http\Controllers\Latihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return(view('LatihanLayout.Dosen.index'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosenList = [
            1 => (object)[
                'nama' => 'Anthony',
                'program' => 'Sistem Informasi',
                'status' => 'Tetap',
                'tanggal_lahir' => '01-09-1970',
                'tempat_lahir' => 'Inggris'
            ],
            2 => (object)[
                'nama' => 'Sandi',
                'program' => 'Informatika',
                'status' => 'Kontrak',
                'tanggal_lahir' => '17-09-1977',
                'tempat_lahir' => 'Palembang'
            ],
        ];

        $dosen = $dosenList[$id];
        return view('LatihanLayout.Dosen.detail', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
