@extends('layouts.app')

@section('title', 'Tambah User Kedungpilang')

@section('content')

    <div class="container">
        <a href="/admin/user" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama">
                    </div>
                    @error('name')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Level</label>
                        <select class="form-control" name="level">
                            <option value="admin">Admin</option>
                            <option value="superadmin">Superadmin</option>
                        </select>
                    </div>
                    @error('level')
                        <small style="color:red">{{ $message }}</small>
                    @enderror

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="username">
                    </div>
                    @error('username')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    @error('password')
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
