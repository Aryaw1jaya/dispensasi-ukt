@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h3>ini form pengajuan</h3>

        <form action="{{ route('student.store-pengajuan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" id="nim" name="student_id"
                            value="{{ session('student_id') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ session('name') }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">Prodi</label>
                        <select class="form-select" id="prodi" name="prodi">
                            <option value="">Pilih Prodi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Masukkan Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="surat_permohonan" class="form-label">Surat Permohonan</label>
                        <input type="file" class="form-control" id="surat_permohonan" name="surat_permohonan">
                    </div>
                    <div class="mb-3">
                        <label for="surat_kronologi" class="form-label">Surat Kronologi</label>
                        <input type="file" class="form-control" id="surat_kronologi" name="surat_kronologi">
                    </div>
                    <div class="mb-3">
                        <label for="sktm" class="form-label">SKTM</label>
                        <input type="file" class="form-control" id="sktm" name="sktm">
                    </div>
                    <div class="mb-3">
                        <label for="kartu_keluarga" class="form-label">Kartu Keluarga</label>
                        <input type="file" class="form-control" id="kartu_keluarga" name="kartu_keluarga">
                    </div>
                    <div class="mb-3">
                        <label for="transkip" class="form-label">Transkip Nilai</label>
                        <input type="file" class="form-control" id="transkip" name="transkip">
                    </div>
                    <div class="mb-3">
                        <label for="ss_myupj" class="form-label">Screenshot Tagihan MyUPJ</label>
                        <input type="file" class="form-control" id="ss_myupj" name="ss_myupj">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
