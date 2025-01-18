@extends('dashboard')
@section('Content')

<!-- Custom styles and scripts -->
<link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div class="row ml-4">
    <div class="col-xl-16 col-lg-15">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Artikel</h6>
            </div>
            <div class="card-body" style="overflow-x: scroll;">

                <a href="#" onclick="ModalTambahArtikel()" class="btn btn-success mt-4">+ Add New Data</a>
                <table class="table table-bordered" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kata-Kata</th>
                            <th>Info</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artikel as $Get)
                        <tr>
                            <td>{{ $Get->judul }}</td>
                            <td>{{ $Get->katakata }}</td>
                            <td>{{ $Get->info }}</td>
                            <td>{{ $Get->tanggal }}</td>
                            <td>
                                <img src="{{ asset('img/artikel/' . $Get->foto) }}" alt="Foto Artikel" width="50">
                            </td>
                            <td>
                                <a href="#" onclick="ModalEditArtikel('{{ $Get->id }}', '{{ $Get->judul }}', '{{ $Get->katakata }}', '{{ $Get->foto }}', '{{ $Get->info }}', '{{ $Get->tanggal }}')" class="btn btn-info">Update</a>
                                <br><br>
                                <a href="#" onclick="ModalHapusArtikel('{{ $Get->id }}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal Tambah Artikel -->
<form action="d-artikel/tambah" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalTambahArtikel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kata-Kata</label>
                        <input type="text" name="katakata" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="info">Info:</label>
                        <select id="info" name="info" class="form-control" required>
                            <option value="">Pilih Info</option>
                            <option value="Akademik">Akademik</option>
                            <option value="Unit Kegiatan Mahasiswa">Unit Kegiatan Mahasiswa</option>
                            <option value="Festival">Festival</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Workshop">Workshop</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Hapus Artikel -->
<form action="d-artikel/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusArtikel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Edit Artikel -->
<form action="d-artikel/edit" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalEditArtikel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah Artikel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="editJudul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kata-Kata</label>
                        <input type="text" name="katakata" class="form-control" id="editKatakata" required>
                    </div>
                    <div class="mb-3">
                        <label for="info">Info:</label>
                        <select id="editInfo" name="info" class="form-control" required>
                            <option value="">Pilih Info</option>
                            <option value="Akademik">Akademik</option>
                            <option value="Unit Kegiatan Mahasiswa">Unit Kegiatan Mahasiswa</option>
                            <option value="Festival">Festival</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Workshop">Workshop</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="editTanggal" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="editFoto" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="ubah" value="Ubah">
                </div>
            </div>
        </div>
    </div>


    
</form>

<!-- JavaScript for Modal Functionality -->
<script>
    function ModalTambahArtikel() {
        $('#ModalTambahArtikel').modal('show');
    }

    function ModalHapusArtikel(id) {
        $('[name="id"]').val(id);
        $('#ModalHapusArtikel').modal('show');
    }

    function ModalEditArtikel(id, judul, katakata, info, tanggal, foto) {
    $('#editId').val(id);
    $('#editJudul').val(judul);
    $('#editKatakata').val(katakata);
    $('#editInfo').val(info);
    $('#editTanggal').val(tanggal);
    
    // Mengatur gambar untuk ditampilkan jika ada
    if (foto) {
        $('#editFoto').val(''); // Kosongkan file input agar user bisa memilih file baru
        $('#currentFoto').attr('src', '/img/artikel/' + foto).show();
    } else {
        $('#currentFoto').hide();
    }
    
    $('#ModalEditArtikel').modal('show');
}


</script>

@endsection
