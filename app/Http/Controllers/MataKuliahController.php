<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Mata Kuliah',
            'mks' => MataKuliah::all(),
        ];

        return view('list_mk', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Mata Kuliah',
        ];

        return view('create_mk', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_mk' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer', 'min:1'],
        ]);

        MataKuliah::create($data);

        return redirect()->to('/matakuliah');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Mata Kuliah',
            'mk' => MataKuliah::findOrFail($id),
        ];

        return view('edit_mk', $data);
    }   

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_mk' => ['required', 'string', 'max:255'],
            'sks' => ['required', 'integer', 'min:1'],
        ]);

        MataKuliah::where('id', $id)->update($data);

        return redirect()->to('/matakuliah');
    }

    public function destroy($id)
    {
        MataKuliah::destroy($id);

        return redirect()->to('/matakuliah');
    }

}
