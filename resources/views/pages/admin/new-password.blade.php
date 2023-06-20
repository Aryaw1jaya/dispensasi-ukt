@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h1>Reset Password</h1>

        <h4>Atas Nama : {{ $user->name }}</h4>
        <hr>
        <form action="{{ route('admin.update-password') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="form-group">
                <label for="password">Password</label>
                <span class="text-danger">*</span>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="New Password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Change Password</button>
        </form>
    </div>
@endsection
