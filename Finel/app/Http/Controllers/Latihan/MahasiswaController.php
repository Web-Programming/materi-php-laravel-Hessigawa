<?php

namespace App\Http\Controllers\Latihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('LatihanLayout.Mahasiswa.index');
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
        $mahasiswaList = [
            1 => (object)[
                'nama' => 'Alex Puskas',
                'program' => 'Sistem Informasi',
                'status' => 'Cuti',
                'tanggal_lahir' => '02-02-2006',
                'tempat_lahir' => 'Palembang'
            ],
            2 => (object)[
                'nama' => 'Finelga Hessigawa',
                'program' => 'Informatika',
                'status' => 'Aktif',
                'tanggal_lahir' => '02-09-2006',
                'tempat_lahir' => 'Palembang'
            ],
            3 => (object)[
                'nama' => 'Lylian Goto',
                'program' => 'Manajemen Informatika',
                'status' => 'Aktif',
                'tanggal_lahir' => '20-12-2007',
                'tempat_lahir' => 'Riau'
            ],
        ];
        
        $mahasiswa = $mahasiswaList[$id];
        return view('LatihanLayout.Mahasiswa.detail', compact('mahasiswa'));
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

