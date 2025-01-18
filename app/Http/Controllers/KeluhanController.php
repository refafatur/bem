<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluhanController extends Controller
{
    public function index()
    {
        $keluhanGrafik = DB::table('keluhan')
            ->select(DB::raw('MONTH(tanggal) as bulan, COUNT(*) as jumlah_keluhan'))
            ->groupBy(DB::raw('MONTH(tanggal)'))
            ->get();

        $keluhanTabel = DB::table('keluhan')->get();
        
        return view('VKeluhan', ['keluhanGrafik' => $keluhanGrafik, 'keluhanTabel' => $keluhanTabel]);
    }

    public function tambah(Request $request)
    {
        DB::table('keluhan')->insert([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'telp' => $request->input('telp'),
        ]);

        return redirect('/keluhan')->with('success', 'Data keluhan berhasil ditambahkan!');
    }

    public function hapus(Request $request)
    {
        $id = $request->id;
        DB::table('keluhan')->where('id', $id)->delete();

        return redirect('/keluhan');
    }

    public function edit(Request $request)
    {
        DB::table('keluhan')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect('/keluhan');
    }
}
