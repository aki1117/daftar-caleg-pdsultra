<?php

namespace App\Http\Controllers;

use App\Models\Caleg;
use Illuminate\Http\Request;

class CalegController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // public function dashboard()
    // {
    //     return view('dashboard');
    // }
    public function index()
    {
        // return view('caleg.index');
        $caleg = Caleg::orderBy('id', 'desc')->paginate(10);
        return view('caleg.index', compact('caleg'));
    }
    // View Mahasiswa
    // public function index()
    // {
    //     $caleg = Caleg::orderBy('id', 'desc')->paginate(10);
    //     return view('caleg.index', compact('caleg'));
    //     // return Mahasiswa::orderbY('id', 'desc')->paginate(10);
    // }

    // // Create Mahasiswa
    public function create()
    {
        return view('caleg.create');
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
        return redirect()->route('caleg.index')->with('status', 'Caleg has been created successfully.');
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

    // Delete Mahasiswa
    public function destroy(Caleg $caleg)
    {
        $caleg->delete();
        return redirect()->route('caleg.index')->with('success', 'Caleg has been deleted successfully');
    }
}
