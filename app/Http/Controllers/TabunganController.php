<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tabungan;
use App\Models\Siswa;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = Siswa::all();
        $rows = Tabungan::all();
        return view('tabungan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rows['data_siswa'] = Siswa::all();
        return view('tabungan.create', compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tabungan::create([
            'tab_id_siswa' => $request->tab_id_siswa,
            'tab_kelas' => $request->tab_kelas,
            'tab_waktu' => $request->tab_waktu,
            'tab_jumlah' => $request->tab_jumlah,
            'tab_penerima' => $request->tab_penerima
        ]);

        return redirect('tabungan');
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
        $row = Tabungan::findOrFail($id);
        return view('tabungan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row = Tabungan::findOrFail($id);
        $row->update([
            'tab_kelas' => $request->tab_kelas,
            'tab_waktu' => $request->tab_waktu,
            'tab_jumlah' => $request->tab_jumlah,
            'tab_penerima' => $request->tab_penerima
        ]);

        return redirect('tabungan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Tabungan::findOrFail($id);
        $row->delete();

        return redirect('tabungan')->with('success', 'Data berhasil dihapus');
    }
}
