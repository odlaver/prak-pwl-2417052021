<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile($nama = '', $npm = '', $kelas = '')
    {
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
        ];

        return view('profile', $data);
    }
}
