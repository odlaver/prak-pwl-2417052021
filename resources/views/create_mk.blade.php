@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-semibold">Tambah Mata Kuliah</h1>
    <p class="muted mt-1 text-sm">Nama mata kuliah dan SKS wajib diisi.</p>

    <form action="{{ route('matakuliah.store') }}" method="POST" class="card mt-6 max-w-md p-5">
        @csrf

        @if ($errors->any())
            <div role="alert"
                class="mb-6 border-l-2 border-orange-700 pl-3 text-sm dark:border-orange-400">
                <p class="font-semibold">Data belum tersimpan.</p>
                <ul class="muted mt-1">
                    @foreach ($errors->all() as $pesan)
                        <li>{{ $pesan }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="space-y-4">
            <div>
                <label for="nama_mk" class="field-label">Nama Mata Kuliah</label>
                <input type="text" id="nama_mk" name="nama_mk" class="field"
                    value="{{ old('nama_mk') }}" autocomplete="off">
            </div>

            <div>
                <label for="sks" class="field-label">SKS</label>
                <input type="number" id="sks" name="sks" class="field"
                    value="{{ old('sks') }}" min="1">
            </div>
        </div>

        <div class="mt-6 flex items-center gap-2">
            <button type="submit" class="btn-primary">Simpan</button>
            <a href="/matakuliah" class="btn-ghost">Batal</a>
        </div>
    </form>
@endsection
