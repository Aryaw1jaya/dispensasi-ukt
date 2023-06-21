@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h1>Input user</h1>
        <form action="{{ route('admin.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="student_id">NIM</label>
                <input type="text" class="form-control" id="student_id" name="student_id" placeholder="NIM">
            </div>
            <div class="form-group">
                <label for="name">Nama</label>
                <span class="text-danger">*</span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <span class="text-danger">*</span>
                <select class="form-control" id="role" name="role" required>
                    <option value="admin">Admin</option>
                    <option value="moderator">Moderator</option>
                    <option value="rektorat">Rektorat</option>
                    <option value="student">Student</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <span class="text-danger">*</span>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" placeholder="Enter email" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <span class="text-danger">*</span>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
