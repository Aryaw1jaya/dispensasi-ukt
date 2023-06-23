@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h3>Welcome {{ session('name') }}, anda login sebagai operator</h3>

        <h3>ini adalah beberapa hak akses anda</h3>
        <a class="btn btn-primary" href="{{ route('moderator.pengajuan') }}">list pengajuan</a>
        <a class="btn btn-warning" href="#">Edit Home Page</a>
        <a class="btn btn-warning" href="#">Edit Tata cara pengajuan</a>
        <a class="btn btn-warning" href="#">Edit FAQ Page</a>

    </div>
@endsection
