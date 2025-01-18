<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasiGrafik = DB::table('aspirasi')
            ->select(DB::raw('MONTH(tanggal) as bulan, COUNT(*) as jumlah_aspirasi'))
            ->groupBy(DB::raw('MONTH(tanggal)'))
            ->get();
        $aspirasiTabel = DB::table('aspirasi')->get();
        return view('VAspirasi', ['aspirasiGrafik' => $aspirasiGrafik, 'aspirasiTabel' => $aspirasiTabel]);
    }

    public function tambah(Request $request)
    {
        DB::table('aspirasi')->insert([
            'npm' => $request->input('npm'),
            'nama' => $request->input('nama'),
            'prodi' => $request->input('prodi'),
            'email' => $request->input('email'),
            'pesan' => $request->input('pesan')
        ]);
        return redirect('/d-aspirasi')->with('success', 'Data keluhan berhasil ditambahkan!');
    }

    public function hapus(Request $request)
    {
        $id = $request->id;
        DB::table('aspirasi')->where('id', $id)->delete();
        return redirect('/d-aspirasi');
    }

    public function edit(Request $request)
    {
        DB::table('aspirasi')->where('id', $request->id)->update([
            'npm' => $request->npm,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'email' => $request->email,
            'pesan' => $request->pesan
        ]);
        return redirect('/d-aspirasi');
    }
}
