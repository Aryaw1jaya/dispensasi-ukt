@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h3>Ini pages pengajuan</h3>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if ($pengajuan)
            <h3>Anda sudah mengajukan dispensasi</h3>
        @else
            <h4>isi form pada link berikut <a href="{{ route('student.create-pengajuan') }}">Disini</a></h4>
        @endif

        <h3>status pengajuan anda adalah</h3>
        <table class="table table-striped ">
            <tr class="table-dark text-light">
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>Surat Permohonan</th>
                <th>surat kronologi</th>
                <th>sktm</th>
                <th>kartu keluarga</th>
                <th>transkip nilai</th>
                <th>Tagihan MyUPJ</th>
                <th>Status</th>
            </tr>
            @foreach ($data as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->prodi }}</td>
                    <td>{{ $student->email }}</td>
                    <td><a href="{{ asset('storage/' . $student->student_id . '/' . $student->surat_permohonan) }}"
                            target="_blank">Lihat</a></td>
                    <td><a href="{{ asset('storage/' . $student->student_id . '/' . $student->surat_kronologi) }}"
                            target="_blank">Lihat</a></td>
                    <td><a href="{{ asset('storage/' . $student->student_id . '/' . $student->sktm) }}"
                            target="_blank">Lihat</a></td>
                    <td><a href="{{ asset('storage/' . $student->student_id . '/' . $student->kartu_keluarga) }}"
                            target="_blank">Lihat</a></td>
                    <td><a href="{{ asset('storage/' . $student->student_id . '/' . $student->transkip) }}"
                            target="_blank">Lihat</a></td>
                    <td><a href="{{ asset('storage/' . $student->student_id . '/' . $student->ss_myupj) }}"
                            target="_blank">Lihat</a></td>
                    <td>{{ $student->status }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
