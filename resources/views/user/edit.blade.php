@extends('layouts.app')

@section('title', 'Edit Layanan Desa Kedungpilang')

@section('content')

    <div class="container">
        <a href="/admin/user" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama"
                            value="{{ $user->name }}">
                    </div>
                    @error('name')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Level</label>
                        <select class="form-control" name="level" @if ($user->level === 'superadmin') disabled @endif>
                            <option value="admin" @if ($user->level === 'admin') selected @endif>Admin</option>
                            <option value="superadmin" @if ($user->level === 'superadmin') selected @endif>Superadmin</option>
                        </select>
                    </div>
                    @error('level')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Username"
                            value="{{ $user->username }}">
                    </div>
                    @error('username')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
