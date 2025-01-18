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
                <h6 class="m-0 font-weight-bold text-primary">Judul</h6>
            </div>
            <div class="card-body" style="overflow-x: scroll;">

                <a href="#" onclick="ModalTambahJudul()" class="btn btn-success mt-4">+ Add New Data</a>
                <table class="table table-bordered" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Keterangan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($judul as $Get)
                        <tr>
                            <td>{{ $Get->judul }}</td>
                            <td>{{ $Get->keterangan }}</td>
                            <td>
                                <a href="#" onclick="ModalEditJudul('{{ $Get->id }}', '{{ $Get->judul }}', '{{ $Get->keterangan }}')" class="btn btn-info">Update</a>
                                <br><br>
                                <a href="#" onclick="ModalHapusJudul('{{ $Get->id }}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal Tambah Judul -->
<form action="d-judul/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahJudul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Judul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input name="judul" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea type="text" class="form-control" name="keterangan" required></textarea>
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

<!-- Form Modal Hapus Judul -->
<form action="d-judul/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusJudul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Form Modal Edit Judul -->
<form action="d-judul/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditJudul" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah Judul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId"> <!-- Input hidden untuk ID Judul -->
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="judul" class="form-control" id="editJudul" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea type="text" class="form-control" name="keterangan" id="editKeterangan" required></textarea>
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
    function ModalTambahJudul() {
        $('#ModalTambahJudul').modal('show');
    }

    function ModalHapusJudul(id) {
        $('[name="id"]').val(id);
        $('#ModalHapusJudul').modal('show');
    }

    function ModalEditJudul(id, judul, keterangan) {
        $('#editId').val(id);
        $('#editJudul').val(judul);
        $('#editKeterangan').val(keterangan);
        $('#ModalEditJudul').modal('show');
    }

</script>

@endsection
