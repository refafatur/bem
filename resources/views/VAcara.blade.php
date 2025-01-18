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
                <h6 class="m-0 font-weight-bold text-primary">Acara</h6>
            </div>
            <div class="card-body" style="overflow-x: scroll;">

                <a href="#" onclick="ModalTambahAcara()" class="btn btn-success mt-4">+ Add New Data</a>
                <table class="table table-bordered" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kata-Kata</th>
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($acara as $Get)
                        <tr>
                            <td>{{ $Get->judul }}</td>
                            <td>{{ $Get->katakata }}</td>
                            <td>{{ $Get->tempat }}</td>
                            <td>{{ $Get->tanggal }}</td>
                            <td>
                                <img src="{{ asset('img/acara/' . $Get->foto) }}" alt="Foto Acara" width="50">
                            </td>
                            <td>
                                <a href="#" onclick="ModalEditAcara('{{ $Get->id }}', '{{ $Get->judul }}', '{{ $Get->katakata }}', '{{ $Get->foto }}', '{{ $Get->tempat }}', '{{ $Get->tanggal }}')" class="btn btn-info">Update</a>
                                <br><br>
                                <a href="#" onclick="ModalHapusAcara('{{ $Get->id }}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal Tambah Acara -->
<form action="d-acara/tambah" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalTambahAcara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Acara</h5>
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
                        <label for="tempat">Tempat:</label>
                        <select id="tempat" name="tempat" class="form-control" required>
                            <option value="">Pilih Tempat</option>
                            <option value="Aula Fekbis">Aula Fekbis</option>
                            <option value="Aula Finkom">Aula Finkom</option>
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

<!-- Form Modal Hapus Acara -->
<form action="d-acara/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusAcara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Form Modal Edit Acara -->
<form action="d-acara/edit" method="post" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="ModalEditAcara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah Acara</h5>
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
                        <label for="tempat">Tempat:</label>
                        <select id="tempat" name="tempat" class="form-control" required>
                            <option value="">Pilih Tempat</option>
                            <option value="Aula Fekbis">Aula Fekbis</option>
                            <option value="Aula Finkom">Aula Finkom</option>
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
    function ModalTambahAcara() {
        $('#ModalTambahAcara').modal('show');
    }

    function ModalHapusAcara(id) {
        $('[name="id"]').val(id);
        $('#ModalHapusAcara').modal('show');
    }

    function ModalEditAcara(id, judul, katakata, tempat, tanggal, foto) {
    $('#editId').val(id);
    $('#editJudul').val(judul);
    $('#editKatakata').val(katakata);
    $('#editTempat').val(tempat);
    $('#editTanggal').val(tanggal);
    
    // Mengatur gambar untuk ditampilkan jika ada
    if (foto) {
        $('#editFoto').val(''); // Kosongkan file input agar user bisa memilih file baru
        $('#currentFoto').attr('src', '/img/Acara/' + foto).show();
    } else {
        $('#currentFoto').hide();
    }
    
    $('#ModalEditAcara').modal('show');
}


</script>

@endsection
