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
                <h6 class="m-0 font-weight-bold text-primary">Testimoni</h6>
            </div>
            <div class="card-body" style="overflow-x: scroll;">

                <a href="#" onclick="ModalTambahTestimoni()" class="btn btn-success mt-4">+ Add New Data</a>
                <table class="table table-bordered" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Pesan</th>
                            <th>Foto</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimoni as $Get)
                        <tr>
                            <td>{{ $Get->nama }}</td>
                            <td>{{ $Get->jabatan }}</td>
                            <td>{{ $Get->pesan }}</td>
                            <td>
                                <img src="{{ asset('img/testimoni/' . $Get->foto) }}" alt="Foto Testimoni" width="50">
                            </td>
                            <td>
                                <a href="#" onclick="ModalEditTestimoni('{{ $Get->id }}', '{{ $Get->nama }}', '{{ $Get->jabatan }}', '{{ $Get->pesan }}', '{{ $Get->foto }}')" class="btn btn-info">Update</a>
                                <br><br>
                                <a href="#" onclick="ModalHapusTestimoni('{{ $Get->id }}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal Tambah Testimoni -->
<form action="d-testimoni/tambah" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalTambahTestimoni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input name="jabatan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea type="text" class="form-control" name="pesan" required></textarea>
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

<!-- Form Modal Hapus Testimoni -->
<form action="d-testimoni/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusTestimoni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Form Modal Edit Testimoni -->
<form action="d-testimoni/edit" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalEditTestimoni" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah Testimoni</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input name="nama" class="form-control" id="editNama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input name="jabatan" class="form-control" id="editJabatan" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea type="text" class="form-control" name="pesan" id="editPesan" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
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
    function ModalTambahTestimoni() {
        $('#ModalTambahTestimoni').modal('show');
    }

    function ModalHapusTestimoni(id) {
        $('[name="id"]').val(id);
        $('#ModalHapusTestimoni').modal('show');
    }

    function ModalEditTestimoni(id, nama, jabatan, pesan, foto) {
    $('#editId').val(id);
    $('#editNama').val(nama);
    $('#editJabatan').val(jabatan);
    $('#editPesan').val(pesan);
    
    // Mengatur gambar untuk ditampilkan jika ada
    if (foto) {
        $('#editFoto').val(''); // Kosongkan file input agar user bisa memilih file baru
        $('#currentFoto').attr('src', '/img/testimoni/' + foto).show();
    } else {
        $('#currentFoto').hide();
    }
    
    $('#ModalEditTestimoni').modal('show');
}


</script>

@endsection
