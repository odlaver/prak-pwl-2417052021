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
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create User',
            'kelas' => $this->kelasModel->getKelas(),
        ];

        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ];

        $this->userModel->create($data);

        return redirect()->to('/user');
    }
}
