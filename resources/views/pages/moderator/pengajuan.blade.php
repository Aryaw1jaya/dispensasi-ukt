@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h3>Welcome {{ session('name') }}, anda login sebagai operator</h3>

        <h3>ini adalah list pengajuan</h3>
        <table class="table table-striped">
            <tr>
                <th>no</th>
                <th>id</th>
                <th>NIM</th>
                <th>nama</th>
                <th>prodi</th>
                <th>email</th>
                <th>surat permohonan</th>
                <th>surat kronologi</th>
                <th>sktm</th>
                <th>kartu keluarga</th>
                <th>transkip</th>
                <th>ss myupj</th>
                <th>status</th>
                <th>action</th>
            </tr>
            @foreach ($pengajuan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->student_id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ asset('storage/' . $item->student_id . '/' . $item->surat_permohonan) }}">
                            surat permohonan
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('storage/' . $item->student_id . '/' . $item->surat_kronologi) }}">
                            surat kronologi
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('storage/' . $item->student_id . '/' . $item->sktm) }}">
                            sktm
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('storage/' . $item->student_id . '/' . $item->kartu_keluarga) }}">
                            kartu keluarga
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('storage/' . $item->student_id . '/' . $item->transkip) }}">
                            transkip
                        </a>
                    </td>
                    <td>
                        <a href="{{ asset('storage/' . $item->student_id . '/' . $item->ss_myupj) }}">
                            ss myupj
                        </a>
                    </td>
                    <td>{{ $item->status }}</td>
                    <td>
                        <form action="{{ route('moderator.update-status', $item->id) }}" method="post">
                            @csrf
                            <select name="status" id="">
                                <option value="diterima">diterima</option>
                                <option value="ditolak">ditolak</option>
                            </select>
                            <textarea name="note" id="" cols="30" rows="3"></textarea>
                            <button class="btn btn-info" type="submit">Submit</button>
                        </form>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
