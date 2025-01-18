<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebArtikelController extends Controller
{
    public function index()
    {
        $artikel = DB::table('tbl_artikel')->get();
        // $tentangkami = DB::table('tbl_tentangkami')->get();
        return view('artikel', [
          'artikel' => $artikel,
        //   'tentangkami' => $tentangkami
        ]);
    }

    public function artikel()
    {
        $artikel = DB::table('tbl_artikel')->get();
        return view('VArtikel', ['artikel' => $artikel]);
    }
    public function artikeltambah(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'katakata' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi gambar
            'info'=> 'required|string',
            'tanggal'=> 'required|string',
        ]);
    
        $path = null;
        if ($request->hasFile('foto')) {
            // Dapatkan file
            $file = $request->file('foto');
            
            // Pindahkan file ke direktori public/img/artikel
            $file->move(public_path('img/artikel'), $file->getClientOriginalName());
            
            // Simpan nama file
            $path = $file->getClientOriginalName();
        }
    
        DB::table('tbl_artikel')->insert([
            'judul' => $request->judul,
            'katakata' => $request->katakata,
            'foto' => $path,
            'info' => $request->info,
            'tanggal'=> $request->tanggal
        ]);
    
        return redirect('/d-artikel');
    }
    
    public function artikeledit(Request $request)
    {
        // Validasi data input
        $request->validate([
            'id' => 'required|integer|exists:tbl_artikel,id',
            'judul' => 'required|string',
            'katakata' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi gambar
            'info'=> 'required|string',
            'tanggal'=> 'required|string',
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data artikel yang akan diupdate
        $artikel = DB::table('tbl_artikel')->where('id', $id)->first();
    
        if (!$artikel) {
            return redirect('/d-artikel')->withErrors(['error' => 'Artikel tidak ditemukan']);
        }
    
        $path = $artikel->foto;
    
        // Jika ada file foto yang diupload, proses upload dan update nama file
        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($path && file_exists(public_path('img/artikel/' . $path))) {
                unlink(public_path('img/artikel/' . $path));
            }
    
            // Dapatkan file
            $file = $request->file('foto');
    
            // Pindahkan file ke direktori public/img/artikel
            $file->move(public_path('img/artikel'), $file->getClientOriginalName());
    
            // Simpan nama file baru
            $path = $file->getClientOriginalName();
        }
    
        // Update data artikel di database
        DB::table('tbl_artikel')->where('id', $id)->update([
            'judul' => $request->judul,
            'katakata' => $request->katakata,
            'foto' => $path,
            'info' => $request->info,
            'tanggal'=> $request->tanggal
        ]);
    
        // Redirect setelah update
        return redirect('/d-artikel');
    }
    
    public function artikelhapus(Request $request)
    {
        // Validasi ID
        $request->validate([
            'id' => 'required|integer|exists:tbl_artikel,id',
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data artikel
        $artikel = DB::table('tbl_artikel')->where('id', $id)->first();
        
        if (!$artikel) {
            return redirect('/d-artikel')->withErrors(['error' => 'Artikel tidak ditemukan']);
        }
        
        // Hapus gambar jika ada
        if ($artikel->foto && file_exists(public_path('img/artikel/' . $artikel->foto))) {
            unlink(public_path('img/artikel/' . $artikel->foto));
        }
        
        // Hapus data artikel dari database
        DB::table('tbl_artikel')->where('id', $id)->delete();
        
        return redirect('/d-artikel');
    }
    public function detail($judul)
    {
        $artikel = DB::table('tbl_artikel')->where('judul', $judul)->first();

        if (!$artikel) {
            return redirect('/artikel')->withErrors(['error' => 'Artikel tidak ditemukan']);
        }
        return view('detail_artikel', compact('artikel'));
    }
    public function filterByInfo($info)
    {
        $artikel = DB::table('artikel')->where('info', $info)->get();
        return view('artikel', ['artikel' => $artikel]);
    }
}
