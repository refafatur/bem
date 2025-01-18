<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebAspirasiController extends Controller
{
    public function tambah(Request $request)
    {
        DB::table('aspirasi')->insert([
            'npm' => $request->input('npm'),
            'nama' => $request->input('nama'),
            'prodi' => $request->input('prodi'),
            'email' => $request->input('email'),
            'pesan' => $request->input('pesan')
        ]);
        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}
