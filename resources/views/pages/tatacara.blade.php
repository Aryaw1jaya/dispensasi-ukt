@extends('layouts.app')
@section('content')
    <div class="">
        <!-- Start Step Registrasi -->
        <div class="container mb-5 d-flex flex-column justify-content-center">
            <h3 class="fw-bolder text-center mt-4">Tata Cara Pengajuan Dispensasi</h3>
            <hr class="w-75 mx-auto">

            <div class="card w-75 mx-auto mb-3 shadow">
                <div class="row g-2">
                    <div class="col-md-4">
                        <img src="https://img.freepik.com/free-vector/download-concept-illustration_114360-2857.jpg"
                            class="img-fluid rounded-start" alt="download Document" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bolder fw-bolder">Collect Document</h5>
                            <p class="card-text">
                                Kamu bisa membuat Dokumen yang diperlukan untuk pengajuan Dispensasi pembayaran kuliah,
                                yaitu Surat Permohonan, Kronologi, Surat Keterangan Tidak Mampu, Fotocopy Kartu keluarga,
                                KTP, dan Kartu Tanda Mahasiswa.
                            </p>
                            <small class="text-muted mb-2">Silahkan lihat contohnya pada Link Berikut</small>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <a href="#" class="btn btn-info shadow">Surat Permohonan</a>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-info shadow">Surat Kronologi</a>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn btn-info shadow">SKTM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-75 mx-auto mb-3 shadow">
                <div class="row g-2">
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bolder">Fill and Complete Documents</h5>
                            <p class="card-text">
                                Isi dan Lengkapi data yang tertera pada dokumen-dokumen diatas,
                                dan jangan lupa untuk di Tanda Tangan.
                            </p>
                            <hr />
                            <p class="card-text">
                                <small class="text-muted">*Jika ada pertanyaan mengenai pengisian form silahkan hubungi
                                    dosen pembimbing masing-masing.</small>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://img.freepik.com/free-vector/checklist-concept-illustration_114360-479.jpg"
                            class="img-fluid rounded-start" alt="Isi Document" />
                    </div>
                </div>
            </div>

            <div class="card w-75 mx-auto mb-3 shadow">
                <div class="row g-2">
                    <div class="col-md-4">
                        <img src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg"
                            class="img-fluid rounded-start" alt="lOGIN" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bolder">Login</h5>
                            <p class="card-text">
                                Silahkan Login pada web ini sebagai Mahasiswa untuk melakukan
                                pengajuan pada form pengajuan yang disediakan.
                            </p>
                            <hr />
                            <p class="card-text">
                                <small class="text-muted"><a href="login/"><button class="btn btn-info shadow">
                                            Login Disini
                                        </button></a></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-75 mx-auto mb-3 shadow">
                <div class="row g-2">
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bolder">Submission Form</h5>
                            <p class="card-text">
                                Setelah Login silahkan isi dan lengkapi Form pengajuan yang
                                ada pada halaman pengajuan. Dan cantumkan semua Dokumen yang diperlukan.
                                Jika Sudah Berhasil, Silahkan Menunggu persetujuan rektorat.
                            </p>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://img.freepik.com/free-vector/forms-concept-illustration_114360-4947.jpg"
                            class="img-fluid rounded-start" alt="Isi Form" />
                    </div>
                </div>
            </div>

            <div class="card w-75 mx-auto mb-3 shadow">
                <div class="row g-2">
                    <div class="col-md-4">
                        <img src="https://img.freepik.com/free-vector/emails-concept-illustration_114360-1217.jpg"
                            class="img-fluid rounded-start" alt="cheking" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bolder">Application Checking</h5>
                            <p class="card-text">
                                Data dan Dokumen yang sudah di submit pada Form Pengajuan akan
                                diperiksa dan cek apakah sudah sesuai atau belum. Jika belum
                                sesuai kamu akan mendapatkan email untuk kekurangan data yang
                                diperlukan.
                                <br>
                                Dan otomatis status pengajuanmu akan menjadi <span
                                    class="badge bg-warning text-dark">Pending</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card w-75 mx-auto mb-3 shadow">
                <div class="row g-2">
                    <div class="col-md-8">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bolder">Approved</h5>
                            <p class="card-text">
                                Jika Data dan Dokumen yang diinput sudah lengkap dan sesuai,
                                maka pihak kampus akan memverifikasi pengajuanmu dan kamu juga akan
                                mendapatkan notifikasi atau email bahwa dispensasi kamu akan diproses.
                            </p>
                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="https://img.freepik.com/free-vector/product-quality-concept-illustration_114360-7301.jpg"
                            class="img-fluid rounded-start" alt="Approved" />
                    </div>
                </div>
            </div>
        </div>
        <!-- End Step Registrasi -->
    </div>
@endsection
