@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h3>Welcome {{ session('name') }}, anda login sebagai Rektorat</h3>

        <h3>ini adalah list pengajuan</h3>
        <table class="table table-striped">
            <tr>
                <th>no</th>
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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop{{ $item->id }}">
                            Action
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>

        @foreach ($pengajuan as $item)
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop{{ $item->id }}" data-bs-backdrop="static"
                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Action Modal</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('rectorate.update-status', $item->id) }}" method="post">
                                @csrf
                                <div class="form-floating">
                                    <select name="status" id="status" class="form-select"
                                        aria-label="Default select example">
                                        <option value="approved">Approved</option>
                                        <option value="ditolak">ditolak</option>
                                    </select>
                                    <label for="status">Status</label>
                                </div>
                                <br>
                                <div class="form-floating">
                                    <textarea class="form-control" name="note" placeholder="berikan notes ke pengaju" id="floatingTextarea"
                                        rows="3" required></textarea>
                                    <label for="floatingTextarea">Notes</label>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
