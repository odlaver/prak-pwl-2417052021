@extends('layouts.app')

@section('content')

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-semibold">Daftar Pengguna</h1>
            <p class="muted mt-1 text-sm">{{ count($users) }} data tersimpan.</p>
        </div>

        <a href="{{ route('user.create') }}" class="btn-primary">Tambah pengguna</a>
    </div>

    <x-user-table :users="$users" />
@endsection
