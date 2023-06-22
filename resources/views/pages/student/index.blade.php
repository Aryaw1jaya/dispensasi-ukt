@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h3>Welcome {{ session('name') }}, anda login sebagai mahasiswa</h3>

        <h3>Tata cara pengajuan dispensasinya sebagai berikut :</h3>
        <ol>
            <li>Isi form pengajuan pada link berikut <a href="{{ route('student.pengajuan') }}">Ini</a></li>
            <li>Upload surat permohonan</li>
            <li>Menunggu konfirmasi dari admin</li>
            <li>Menunggu dispensasi selesai</li>
        </ol>
    </div>
@endsection
