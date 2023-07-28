<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        $user = User::where('username', Auth::user()->username)->first();
        return view('password.index', [
            'title' => 'Ubah Password',
        ])->with(compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('username', Auth::user()->username)->first();
        return view('password.edit', [
            'title' => 'Ubah Password',
        ])->with(compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validate
        $request->validate([
            // olf password must same with password in database
            'password_lama' => 'required',
            // new password must same with confirm password
            'password_baru' => 'required|same:konfirmasi',
            'konfirmasi' => 'required',
        ], [
            'password_lama.required' => 'Password lama harus diisi',
            'password_baru.required' => 'Password baru harus diisi',
            'password_baru.same' => 'Password baru dan konfirmasi password harus sama',
            'konfirmasi.required' => 'Konfirmasi password harus diisi',
        ]);
        //cek old password
        $user = User::where('username', Auth::user()->username)->first();
        if (!Hash::check($request->password_lama, $user->password)) {
            return redirect('/admin/password')->with('error', 'Password lama tidak sesuai');
        }
        //cek new password
        if (Hash::check($request->password_baru, $user->password)) {
            return redirect('/admin/password')->with('error', 'Password baru tidak boleh sama dengan password lama');
        }
        User::where('username', Auth::user()->username)->update([
            'password' => bcrypt($request->password_baru),
        ]);
        return redirect('/admin/password')->with('success', 'Password berhasil diubah');
    }
}
