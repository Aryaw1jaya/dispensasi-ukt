@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5 mb-5">
        <h1>Edit User</h1>
        <form action="{{ route('admin.update') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="row py-3 mb-4 rounded-4"
                style="height: auto; min-height:25vh; border: 1px solid black; background-color: antiquewhite">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="student_id">NIM</label>
                        <input type="text" class="form-control" id="student_id" name="student_id"
                            value="{{ $user->student_id }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <span class="text-danger">*</span>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                            required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="role">Role</label>
                        <span class="text-danger">*</span>
                        <select class="form-control" id="role" name="role" required>
                            <option value="admin" @if ($user->role == 'admin') selected @endif>Admin</option>
                            <option value="moderator" @if ($user->role == 'moderator') selected @endif>Moderator</option>
                            <option value="rektorat" @if ($user->role == 'rektorat') selected @endif>Rektorat</option>
                            <option value="student" @if ($user->role == 'student') selected @endif>Student</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <span class="text-danger">*</span>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ $user->email }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('admin.edit-password', $user->id) }}" class="btn btn-warning">
                Reset Password
            </a>
        </form>
    </div>
@endsection
