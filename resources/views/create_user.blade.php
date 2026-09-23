@extends('layouts.app')

@section('content')

    <h1 class="text-2xl font-semibold">Tambah Pengguna</h1>
    <p class="muted mt-1 text-sm">Nama, NPM, dan kelas wajib diisi.</p>

    <form action="{{ route('user.store') }}" method="POST" class="card mt-6 max-w-md p-5">
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
                <label for="nama" class="field-label">Nama</label>
                <input type="text" id="nama" name="nama" class="field"
                    value="{{ old('nama') }}" autocomplete="off">
            </div>

            <div>
                <label for="npm" class="field-label">NPM</label>
                <input type="text" id="npm" name="npm" class="field"
                    value="{{ old('npm') }}" inputmode="numeric" autocomplete="off">
            </div>

            <div>
                <label for="kelas_id" class="field-label">Kelas</label>
                <select name="kelas_id" id="kelas_id" class="field">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}"
                            @selected(old('kelas_id') == $kelasItem->id)>
                            {{ $kelasItem->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mt-6 flex items-center gap-2">
            <button type="submit" class="btn-primary">Simpan</button>
            <a href="/user" class="btn-ghost">Batal</a>
        </div>
    </form>
@endsection
