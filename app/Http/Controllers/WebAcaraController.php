<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class WebAcaraController extends Controller
{
    public function index()
    {
        $acara = DB::table('tbl_acara')->get();
        return view('acara', [
          'acara' => $acara,
        ]);
    }

    public function acara()
    {
        $acara = DB::table('tbl_acara')->get();
        return view('VAcara', ['acara' => $acara]);
    }
    public function acaratambah(Request $request)
    {
        // Validasi data input
        $request->validate([
            'judul' => 'required|string',
            'katakata' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tempat' => 'required|string',
            'tanggal' => 'required|string',
        ]);

        // Proses upload foto jika ada
        $path = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $file->move(public_path('img/acara'), $file->getClientOriginalName());
            $path = $file->getClientOriginalName();
        }

        // Simpan data acara ke database
        $acaraData = [
            'judul' => $request->judul,
            'katakata' => $request->katakata,
            'foto' => $path,
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
        ];
        DB::table('tbl_acara')->insert($acaraData);

        // Buat file Excel
        $fileName = 'Acara_' . $request->judul . '.xlsx';
        $filePath = public_path('excel/' . $fileName);

        $spreadsheet = new Spreadsheet();
        
        // Sheet 1: Data Acara
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Acara');
        $sheet->setCellValue('A1', 'Judul');
        $sheet->setCellValue('B1', 'Kata-kata');
        $sheet->setCellValue('C1', 'Foto');
        $sheet->setCellValue('D1', 'Tempat');
        $sheet->setCellValue('E1', 'Tanggal');

        $sheet->setCellValue('A2', $request->judul);
        $sheet->setCellValue('B2', $request->katakata);
        $sheet->setCellValue('C2', $path);
        $sheet->setCellValue('D2', $request->tempat);
        $sheet->setCellValue('E2', $request->tanggal);

        // Tambahkan Sheet untuk Data Registrasi
        $spreadsheet->createSheet();
        $registrationSheet = $spreadsheet->getSheet(1);
        $registrationSheet->setTitle('Registrasi');
        $registrationSheet->setCellValue('A1', 'Nama Lengkap');
        $registrationSheet->setCellValue('B1', 'Email');
        $registrationSheet->setCellValue('C1', 'No. Telepon');
        $registrationSheet->setCellValue('D1', 'Komentar');

        // Simpan file Excel
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);

        return redirect('/d-acara')->with('success', 'Acara telah ditambahkan dan file Excel dibuat!');
    }
    
    public function acaraedit(Request $request)
    {
        // Validasi data input
        $request->validate([
            'id' => 'required|integer|exists:tbl_artikel,id',
            'judul' => 'required|string',
            'katakata' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi gambar
            'tempat'=> 'required|string',
            'tanggal'=> 'required|string',
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data artikel yang akan diupdate
        $acara = DB::table('tbl_acara')->where('id', $id)->first();
    
        if (!$acara) {
            return redirect('/d-acara')->withErrors(['error' => 'Acara tidak ditemukan']);
        }
    
        $path = $acara->foto;
    
        // Jika ada file foto yang diupload, proses upload dan update nama file
        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($path && file_exists(public_path('img/acara/' . $path))) {
                unlink(public_path('img/acara/' . $path));
            }
    
            // Dapatkan file
            $file = $request->file('foto');
    
            // Pindahkan file ke direktori public/img/artikel
            $file->move(public_path('img/acara'), $file->getClientOriginalName());
    
            // Simpan nama file baru
            $path = $file->getClientOriginalName();
        }
    
        // Update data artikel di database
        DB::table('tbl_acara')->where('id', $id)->update([
            'judul' => $request->judul,
            'katakata' => $request->katakata,
            'foto' => $path,
            'tempat' => $request->tempat,
            'tanggal'=> $request->tanggal
        ]);
    
        // Redirect setelah update
        return redirect('/d-acara');
    }
    
    public function acarahapus(Request $request)
    {
        // Validasi ID
        $request->validate([
            'id' => 'required|integer|exists:tbl_acara,id',
        ]);
    
        // Ambil ID dari request
        $id = $request->id;
    
        // Ambil data artikel
        $acara = DB::table('tbl_acara')->where('id', $id)->first();
        
        if (!$acara) {
            return redirect('/d-acara')->withErrors(['error' => 'Acara tidak ditemukan']);
        }
        
        // Hapus gambar jika ada
        if ($acara->foto && file_exists(public_path('img/acara/' . $acara->foto))) {
            unlink(public_path('img/acara/' . $acara->foto));
        }
        
        // Hapus data artikel dari database
        DB::table('tbl_acara')->where('id', $id)->delete();
        
        return redirect('/d-acara');
    }

    //form excel
    public function register(Request $request, $judul)
    {
        // Validasi data input
        $validated = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'comments' => 'nullable|string',
        ]);
    
        // Tentukan path file Excel
        $fileName = 'Acara_' . $judul . '.xlsx';
        $filePath = public_path('excel/' . $fileName);
    
        if (!file_exists($filePath)) {
            return redirect()->back()->with('error', 'File Excel acara tidak ditemukan!');
        }
    
        // Load file Excel yang ada
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($filePath);
    
        // Tambahkan atau perbarui sheet untuk data registrasi
        $registrationSheet = $spreadsheet->getSheetByName('Registrasi');
        if (!$registrationSheet) {
            $registrationSheet = $spreadsheet->createSheet();
            $registrationSheet->setTitle('Registrasi');
            $registrationSheet->setCellValue('A1', 'Nama Lengkap');
            $registrationSheet->setCellValue('B1', 'Email');
            $registrationSheet->setCellValue('C1', 'No. Telepon');
            $registrationSheet->setCellValue('D1', 'Komentar');
        }
    
        // Temukan baris kosong berikutnya
        $highestRow = $registrationSheet->getHighestRow();
        $nextRow = $highestRow + 1;
    
        // Tulis data pendaftaran
        $registrationSheet->setCellValue('A' . $nextRow, $request->nama);
        $registrationSheet->setCellValue('B' . $nextRow, $request->email);
        $registrationSheet->setCellValue('C' . $nextRow, $request->phone);
        $registrationSheet->setCellValue('D' . $nextRow, $request->comments);
    
        // Simpan spreadsheet
        $writer = new Xlsx($spreadsheet);
        $writer->save($filePath);
    
        return redirect()->route('acara')->with('success', 'Data pendaftaran telah disimpan!');
    }
    }
