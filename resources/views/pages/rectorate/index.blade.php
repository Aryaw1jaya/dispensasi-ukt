@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h3>Welcome {{ session('name') }}, anda login sebagai Rektorat</h3>

        <h3>ini adalah beberapa hak akses anda</h3>
        <a class="btn btn-primary" href="{{ route('rectorate.pengajuan') }}">list pengajuan</a>

    </div>
@endsection
