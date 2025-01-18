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
                <h6 class="m-0 font-weight-bold text-primary">Galeri</h6>
            </div>
            <div class="card-body" style="overflow-x: scroll;">
                <a href="#" onclick="ModalTambahGaleri()" class="btn btn-success mt-4">+ Add New Data</a>
                <table class="table table-bordered" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Foto/Video</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($galeri as $Get)
                        <tr>
                            <td>{{ $Get->judul }}</td>
                            <td>
                                <img src="{{ asset('img/galeri/' . $Get->berkas) }}" alt="Foto Galeri" width="50">
                            </td>
                            <td>
                                <a href="#" onclick="ModalEditGaleri('{{ $Get->id }}', '{{ $Get->judul }}', '{{ $Get->berkas }}')" class="btn btn-info">Update</a>
                                <a href="#" onclick="ModalHapusGaleri('{{ $Get->id }}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal Tambah Galeri -->
<form action="d-galeri/tambah" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalTambahGaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto/Video</label>
                        <input type="file" name="berkas" class="form-control" required>
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

<!-- Form Modal Hapus Galeri -->
<form action="d-galeri/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusGaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Form Modal Edit Galeri -->
<form action="d-galeri/edit" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalEditGaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="editJudul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Foto/Video</label>
                        <input type="file" name="file" class="form-control" id="editFile" required>
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
    function ModalTambahGaleri() {
        $('#ModalTambahGaleri').modal('show');
    }

    function ModalHapusGaleri(id) {
        $('[name="id"]').val(id);
        $('#ModalHapusGaleri').modal('show');
    }

    function ModalEditGaleri(id, judul, file) {
    $('#editId').val(id);
    $('#editJudul').val(judul);
    
    // Mengatur gambar untuk ditampilkan jika ada
    if (file) {
        $('#editFile').val(''); // Kosongkan file input agar user bisa memilih file baru
        $('#currentFile').attr('src', '/img/galeri/' + file).show();
    } else {
        $('#currentFile').hide();
    }
    
    $('#ModalEditGaleri').modal('show');
}


</script>

@endsection
