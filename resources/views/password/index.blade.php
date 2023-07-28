@extends('layouts.app')

@section('title', 'Ganti Password')

@section('content')
    <div class="container">
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <strong>Gagal</strong>
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif
        <a href="{{ route('password.edit', $user->username) }}" class="btn btn-warning">Ganti Password</a>
    </div>
@endsection
