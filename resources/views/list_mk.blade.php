@extends('layouts.app')

@section('content')

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Daftar Mata Kuliah</h1>
            <p class="muted mt-1 text-sm">{{ count($mks) }} data tersimpan.</p>
        </div>

        <a href="{{ route('matakuliah.create') }}" class="btn-primary">Tambah mata kuliah</a>
    </div>

    <div class="card p-5">
        <table class="w-full text-left">
            <thead>
                <tr class="border-b border-orange-200 dark:border-orange-500/30">
                    <th scope="col" class="col-head">Nama Mata Kuliah</th>
                    <th scope="col" class="col-head">SKS</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $mk)
                    <tr class="rule border-b last:border-0">
                        <td class="py-3 font-medium">{{ $mk->nama_mk }}</td>
                        <td class="muted py-3">{{ $mk->sks }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="muted py-3">Belum ada mata kuliah yang tersimpan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
