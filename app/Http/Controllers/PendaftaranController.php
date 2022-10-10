<?php

namespace App\Http\Controllers;

use App\Models\Caleg;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function pendaftaran()
    {
        return view('pendaftaran');
    }
    public function store(Request $request)
    {
        $request->validate([
            // 'foto' => 'required',
            // 'nama' => 'required',
            // 'daerahpemilihan' => 'required',
            // 'nik' => 'required',
            // 'notelepon' => 'required',
            // 'tempatlahir' => 'required',
            // 'tanggallahir' => 'required',
            // 'jeniskelamin' => 'required',
            // 'agama' => 'required',
            // 'alamatktp' => 'required',
            // 'alamatdomisili' => 'required',
            // 'statusperkawinan' => 'required',
            // 'pendidikanterakhir' => 'required',
            // 'pekerjaan' => 'required',
            // 'sd' => 'required',
            // 'smp' => 'required',
            // 'sma' => 'required',
            // 's1' => 'required',
            // 's2' => 'required',
            // 's3' => 'required',
            // 'riwayatdiklat' => 'required',
            // 'riwayatorganisasi' => 'required',
            // 'riwayatpekerjaan' => 'required',
            // 'riwayatpenghargaan' => 'required',
        ]);

        Caleg::create($request->post());

        // dd($request->all());
        return redirect()->route('pendaftaran')->with('status', 'Caleg has been created successfully.');
    }

    // // Edit Mahasiswa
    // public function edit(Mahasiswa $mahasiswa)
    // {
    //     return view('mahasiswa.edit', compact('mahasiswa'));
    // }

    // public function update(Request $request, Mahasiswa $mahasiswa)
    // {
    //     $request->validate([
    //         'nama' => 'required',
    //         'nim' => 'required|max:11',
    //         'alamat' => 'required',
    //     ]);

    //     $mahasiswa->fill($request->post())->save();

    //     return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa Has Been updated successfully');
    // }

    // // Delete Mahasiswa
    // public function destroy(Mahasiswa $mahasiswa)
    // {
    //     $mahasiswa->delete();
    //     return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa has been deleted successfully');
    // }
}
