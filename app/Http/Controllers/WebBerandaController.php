<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebBerandaController extends Controller
{
    public function index()
    {
        $judul = DB::table('tbl_beranda_judul')->get();
        $artikel = DB::table('tbl_artikel')
            ->orderBy('tanggal', 'desc')
            ->take(2)
            ->get();
        $acara= DB::table('tbl_acara')
            ->orderBy('tanggal', 'desc')
            ->take(2)
            ->get();
        $testimoni= DB::table('tbl_beranda_testimoni')->get();
        return view('welcome', [
        'judul' => $judul,
        'artikel'=> $artikel,
        'testimoni' => $testimoni,
        'acara'=> $acara
        ]);
    }
    public function judul()
    {
        $judul = DB::table('tbl_beranda_judul')->get();
        return view('VJudul', ['judul' => $judul]);
    }

    public function judultambah(Request $request)
    {
        DB::table('tbl_beranda_judul')->insert([
            'judul' => $request->input('judul'),
            'keterangan' => $request->input('keterangan'),
        ]);
        return redirect('/d-judul')->with('success', 'Data Judul berhasil ditambahkan!');
    }

    public function judulhapus(Request $request)
    {
        $id = $request->id;
        DB::table('tbl_beranda_judul')->where('id', $id)->delete();
        return redirect('/d-judul');
    }

    public function juduledit(Request $request)
    {
        DB::table('tbl_beranda_judul')->where('id', $request->id)->update([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/d-judul');
    }

    public function testimoni()
    {
        $testimoni = DB::table('tbl_beranda_testimoni')->get();
        return view('VTestimoni', ['testimoni' => $testimoni]);
    }
    public function testimonitambah(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'pesan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi gambar
        ]);
    
        $path = null;
        if ($request->hasFile('foto')) {
            // Dapatkan file
            $file = $request->file('foto');
            
            // Pindahkan file ke direktori public/img/testimoni
            $file->move(public_path('img/testimoni'), $file->getClientOriginalName());
            
            // Simpan nama file
            $path = $file->getClientOriginalName();
        }
    
        DB::table('tbl_beranda_testimoni')->insert([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'pesan' => $request->pesan,
            'foto' => $path,
        ]);
    
        return redirect('/d-testimoni');
    }
    
    public function testimoniedit(Request $request)
    {
        // Validasi data input
        $request->validate([
            'id' => 'required|integer|exists:tbl_beranda_testimoni,id',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'pesan' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi gambar
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data testimonial yang akan diupdate
        $testimoni = DB::table('tbl_beranda_testimoni')->where('id', $id)->first();
    
        if (!$testimoni) {
            return redirect('/d-testimoni')->withErrors(['error' => 'Testimonial tidak ditemukan']);
        }
    
        $path = $testimoni->foto;
    
        // Jika ada file foto yang diupload, proses upload dan update nama file
        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($path && file_exists(public_path('img/testimoni/' . $path))) {
                unlink(public_path('img/testimoni/' . $path));
            }
    
            // Dapatkan file
            $file = $request->file('foto');
    
            // Pindahkan file ke direktori public/img/testimoni
            $file->move(public_path('img/testimoni'), $file->getClientOriginalName());
    
            // Simpan nama file baru
            $path = $file->getClientOriginalName();
        }
    
        // Update data testimonial di database
        DB::table('tbl_beranda_testimoni')->where('id', $id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'pesan' => $request->pesan,
            'foto' => $path,
        ]);
    
        // Redirect setelah update
        return redirect('/d-testimoni');
    }
    
    public function testimonihapus(Request $request)
    {
        // Validasi ID
        $request->validate([
            'id' => 'required|integer|exists:tbl_beranda_testimoni,id',
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data testimonial
        $testimoni = DB::table('tbl_beranda_testimoni')->where('id', $id)->first();
        
        if (!$testimoni) {
            return redirect('/d-testimoni')->withErrors(['error' => 'Testimonial tidak ditemukan']);
        }
        
        // Hapus gambar jika ada
        if ($testimoni->foto && file_exists(public_path('img/testimoni/' . $testimoni->foto))) {
            unlink(public_path('img/testimoni/' . $testimoni->foto));
        }
        
        // Hapus data testimonial dari database
        DB::table('tbl_beranda_testimoni')->where('id', $id)->delete();
        
        return redirect('/d-testimoni');
    }
        
    

}
