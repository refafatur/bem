<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebGaleriController extends Controller
{
    public function index()
    {
        $galeri = DB::table('tbl_galeri')->get();
        return view('galeri', [
          'galeri' => $galeri,
        ]);
    }

    public function galeri()
    {
        $galeri = DB::table('tbl_galeri')->get();
        return view('VGaleri', ['galeri' => $galeri]);
    }
    public function galeritambah(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'berkas' => 'nullable|mimes:jpeg,png,jpg,mp4,mov,avi|max:20480',
        ]);
    
        $path = null;
        if ($request->hasFile('berkas')) {
            // Dapatkan file
            $file = $request->file('berkas');
            
            // Pindahkan file ke direktori public/img/galeri
            $file->move(public_path('img/galeri'), $file->getClientOriginalName());
            
            // Simpan nama file
            $path = $file->getClientOriginalName();
        }
    
        DB::table('tbl_galeri')->insert([
            'judul' => $request->judul,
            'berkas' => $path,
        ]);
    
        return redirect('/d-galeri');
    }
    
    public function galeriedit(Request $request)
    {
        // Validasi data input
        $request->validate([
            'id' => 'required|integer|exists:tbl_galeri,id',
            'judul' => 'required|string',
            'berkas' => 'nullable|mimes:jpeg,png,jpg,mp4,mov,avi|max:20480',
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data galeri yang akan diupdate
        $galeri = DB::table('tbl_galeri')->where('id', $id)->first();
    
        if (!$galeri) {
            return redirect('/d-galeri')->withErrors(['error' => 'Galeri tidak ditemukan']);
        }
    
        $path = $galeri->foto;
    
        // Jika ada file foto yang diupload, proses upload dan update nama file
        if ($request->hasFile('berkas')) {
            // Hapus gambar lama jika ada
            if ($path && file_exists(public_path('img/galeri/' . $path))) {
                unlink(public_path('img/galeri/' . $path));
            }
    
            // Dapatkan file
            $file = $request->file('berkas');
    
            // Pindahkan file ke direktori public/img/galeri
            $file->move(public_path('img/galeri'), $file->getClientOriginalName());
    
            // Simpan nama file baru
            $path = $file->getClientOriginalName();
        }
    
        // Update data galeri di database
        DB::table('tbl_galeri')->where('id', $id)->update([
            'judul' => $request->judul,
            'berkas' => $path,
        ]);
    
        // Redirect setelah update
        return redirect('/d-galeri');
    }
    
    public function galerihapus(Request $request)
    {
        // Validasi ID
        $request->validate([
            'id' => 'required|integer|exists:tbl_galeri,id',
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data galeri
        $galeri = DB::table('tbl_galeri')->where('id', $id)->first();
        
        if (!$galeri) {
            return redirect('/d-galeri')->withErrors(['error' => 'Galeri tidak ditemukan']);
        }
        
        // Hapus gambar jika ada
        if ($galeri->foto && file_exists(public_path('img/galeri/' . $galeri->foto))) {
            unlink(public_path('img/galeri/' . $galeri->foto));
        }
        
        // Hapus data galeri dari database
        DB::table('tbl_galeri')->where('id', $id)->delete();
        
        return redirect('/d-galeri');
    }

    // public function detail($judul)
    // {
    //     $galeri = DB::table('tbl_galeri')->where('judul', $judul)->first();

    //     if (!$galeri) {
    //         return redirect('/galeri')->withErrors(['error' => 'Galeri tidak ditemukan']);
    //     }
    //     return view('detail_galeri', compact('galeri'));
    // }
    // public function filterByInfo($info)
    // {
    //     $artikel = DB::table('artikel')->where('info', $info)->get();
    //     return view('artikel', ['artikel' => $artikel]);
    // }
}
