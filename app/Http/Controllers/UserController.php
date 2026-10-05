<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Pengguna',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pengguna',
            'kelas' => $this->kelasModel->getKelas(),
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'npm' => ['required', 'string', 'max:20', 'unique:user,npm'],
            'kelas_id' => ['required', 'exists:kelas,id'],
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'npm.required' => 'NPM wajib diisi.',
            'npm.unique' => 'NPM tersebut sudah terdaftar.',
            'kelas_id.required' => 'Kelas wajib dipilih.',
            'kelas_id.exists' => 'Kelas yang dipilih tidak tersedia.',
        ]);

        $this->userModel->create($data);

        return redirect()->to('/user')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pengguna',
            'user' => UserModel::findOrFail($id),
            'kelas' => $this->kelasModel->getKelas(),
        ];

        return view('edit_user', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'npm' => ['required', 'string', 'max:20', 'unique:user,npm,' . $id],
            'kelas_id' => ['required', 'exists:kelas,id'],
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'npm.required' => 'NPM wajib diisi.',
            'npm.unique' => 'NPM tersebut sudah terdaftar.',
            'kelas_id.required' => 'Kelas wajib dipilih.',
            'kelas_id.exists' => 'Kelas yang dipilih tidak tersedia.',
        ]);

        $user = UserModel::findOrFail($id);
        $user->update($data);

        return redirect()->to('/user')->with('success', 'Data ' . $user->nama . ' berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = UserModel::find($id);

        if (!$user) {
            return redirect()->to('/user')->with('error', 'Pengguna tidak ditemukan.');
        }

        $user->delete();

        return redirect()->to('/user')->with('success', 'Data ' . $user->nama . ' berhasil dihapus.');
    }
}
