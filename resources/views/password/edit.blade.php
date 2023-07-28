@extends('layouts.app')

@section('title', 'Ganti Password')

@section('content')

    <div class="container">
        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <strong>Gagal</strong>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('password.update', $user->username) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="password_lama">Password Lama</label>
                    <input type="password" class="form-control" name="password_lama" placeholder="password_lama">
                </div>
                @error('password_lama')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="password_baru">Password Baru</label>
                    <input type="password" class="form-control" name="password_baru" placeholder="password_baru">
                </div>
                @error('password_baru')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="konfirmasi">Konfirmasi Password Baru</label>
                    <input type="password" class="form-control" name="konfirmasi" placeholder="konfirmasi">
                </div>
                @error('stok')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
