<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {
        $kontakGrafik = DB::table('kontak')
            ->select(DB::raw('MONTH(tanggal) as bulan, COUNT(*) as jumlah_kontak'))
            ->groupBy(DB::raw('MONTH(tanggal)'))
            ->get();

        $kontakTabel = DB::table('kontak')->get();
        
        return view('VKontak', ['kontakGrafik' => $kontakGrafik, 'kontakTabel' => $kontakTabel]);
    }

    public function tambah(Request $request)
    {
        DB::table('kontak')->insert([
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'subjek' => $request->input('subjek'),
            'pesan' => $request->input('pesan'),
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    public function hapus(Request $request)
    {
        $id = $request->id;
        DB::table('kontak')->where('id', $id)->delete();

        return redirect('/d-kontak');
    }

    public function edit(Request $request)
    {
        DB::table('kontak')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
        ]);

        return redirect('d-/kontak');
    }
}
