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
                <h6 class="m-0 font-weight-bold text-primary">Aspirasi</h6>
            </div>
            <div class="card-body" style="overflow-x: scroll;">
                <!-- Grafik -->
                <h6 class="mt-4">Grafik Aspirasi</h6>
                <canvas id="aspirasiChart" width="400" height="100"></canvas>
                <!-- <a href="#" onclick="ModalTambahAspirasi()" class="btn btn-success mt-4">+ Add New Data</a> -->
                <input type="text" id="searchInput" class="form-control" style="margin-top:10px; margin-bottom:10px;" placeholder="Search...">
                <table class="table table-bordered" style="margin-top:10px;">
                    <thead>
                        <tr>
                            <th>NPM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Pesan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="pegawaiTable">
                        @foreach($aspirasiTabel as $Get)
                        <tr>
                            <td>{{ $Get->npm }}</td>
                            <td>{{ $Get->nama }}</td>
                            <td>{{ $Get->prodi }}</td>
                            <td>{{ $Get->email }}</td>
                            <td>{{ $Get->tanggal }}</td>
                            <td>{{ $Get->pesan }}</td>
                            <td>
                                <a href="#" onclick="ModalEditAspirasi('{{ $Get->id }}', '{{ $Get->npm }}', '{{ $Get->nama }}', '{{ $Get->prodi }}', '{{ $Get->email }}', '{{ $Get->tanggal }}', '{{ $Get->pesan }}')" class="btn btn-info">Update</a>
                                <a href="#" onclick="ModalHapusAspirasi('{{ $Get->id }}')" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal Tambah Keluhan -->
<!-- <form action="aspirasi/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahAspirasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Aspirasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <textarea name="npm" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <textarea name="nama" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRODI</label>
                        <textarea name="prodi" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <textarea name="tanggal" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea name="pesan" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                </div>
            </div>
        </div>
    </div>
</form> -->

<!-- Form Modal Hapus Keluhan -->
<form action="d-aspirasi/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusAspirasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- Form Modal Edit Keluhan -->
<form action="d-aspirasi/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditAspirasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Ubah Aspirasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId"> <!-- Input hidden untuk ID keluhan -->
                    <div class="mb-3">
                        <label class="form-label">NPM</label>
                        <textarea name="npm" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <textarea name="nama" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">PRODI</label>
                        <textarea name="prodi" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <textarea name="tanggal" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea name="pesan" class="form-control" required></textarea>
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
    function ModalTambahAspirasi() {
        $('#ModalTambahAspirasi').modal('show');
    }

    function ModalHapusAspirasi(id) {
        $('[name="id"]').val(id);
        $('#ModalHapusAspirasi').modal('show');
    }

    function ModalEditAspirasi(id,npm,nama,prodi,email, tanggal, pesan) {
        $('[name="id"]').val(id);
        $('[name="npm"]').val(npm);
        $('[name="nama"]').val(nama);
        $('[name="prodi"]').val(prodi);
        $('[name="email"]').val(email);
        $('[name="tanggal"]').val(tanggal);
        $('[name="pesan"]').val(pesan);
        $('#ModalEditAspirasi').modal('show');
    }

var aspirasiData = @json($aspirasiGrafik);

var bulanNama = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

var ctx = document.getElementById('aspirasiChart').getContext('2d');
var aspirasiChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: aspirasiData.map(k => bulanNama[k.bulan - 1]),
        datasets: [{
            label: 'Jumlah aspirasi',
            data: aspirasiData.map(k => k.jumlah_aspirasi),
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                max: 50 // Mengatur skala maksimal sumbu Y menjadi 100
            }
        }
    }
});

</script>

@endsection
