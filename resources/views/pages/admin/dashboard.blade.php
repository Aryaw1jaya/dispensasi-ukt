@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h1>Welcome {{ session('name') }}, anda login sebagai Admin.</h1>

        <table class="table table-striped mt-4" style="border: 1px black">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Register</th>
                <th>Updated</th>
                <th>action</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->student_id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#">
                            <button class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
