<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PengalamanKerjaController extends Controller
{
    // ✅ Menampilkan daftar pengalaman kerja
    public function index()
    {
        $pengalaman_kerja = DB::table('pengalaman_kerja')->get(); // Ambil data dari database
        return view('backend.pengalaman_kerja.index', compact('pengalaman_kerja'));
    }

    // ✅ Menampilkan form tambah pengalaman kerja
    public function create()
    {
        $pengalaman_kerja = null;
        return view('backend.pengalaman_kerja.create', compact('pengalaman_kerja'));
    }

    // ✅ Menyimpan pengalaman kerja baru
    public function store(Request $request)
    {
        DB::table('pengalaman_kerja')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar
        ]);

        return redirect()->route('pengalaman_kerja.index')
                         ->with('success', 'Data pengalaman kerja baru telah berhasil disimpan.');
    }

    // ✅ Menampilkan form edit pengalaman kerja
    public function edit($id)
    {
        $pengalaman_kerja = DB::table('pengalaman_kerja')->where('id', $id)->first();
        return view('backend.pengalaman_kerja.create', compact('pengalaman_kerja'));
    }

    // ✅ Memperbarui pengalaman kerja
    public function update(Request $request)
    {
        DB::table('pengalaman_kerja')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'tahun_masuk' => $request->tahun_masuk,
            'tahun_keluar' => $request->tahun_keluar
        ]);

        return redirect()->route('pengalaman_kerja.index')
                         ->with('success', 'Pengalaman Kerja berhasil diperbaharui.');
    }

    // ✅ Menghapus pengalaman kerja
    public function destroy($id)
    {
        DB::table('pengalaman_kerja')->where('id', $id)->delete();

        return redirect()->route('pengalaman_kerja.index')
                         ->with('success', 'Data Pengalaman Kerja berhasil dihapus');
    }

    public function search(Request $request)
{
    $query = $request->input('query');

    // Ambil data berdasarkan pencarian
    $pengalaman_kerja = DB::table('pengalaman_kerja')
        ->where('nama', 'LIKE', "%$query%")
        ->orWhere('jabatan', 'LIKE', "%$query%")
        ->get();

    return view('backend.pengalaman_kerja.index', compact('pengalaman_kerja'));
}

}
