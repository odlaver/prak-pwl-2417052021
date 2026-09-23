@props(['users'])

@if (count($users) === 0)
    <div class="card px-6 py-10 text-center">
        <p class="font-semibold">Belum ada pengguna yang tersimpan.</p>
        <p class="muted mt-1 text-sm">
            Data akan muncul di sini setelah pengguna pertama ditambahkan.
        </p>
        <a href="{{ route('user.create') }}" class="btn-primary mt-5">
            Tambah pengguna pertama
        </a>
    </div>
@else
    <div class="card p-5">
        <dl class="sm:hidden">
            @foreach ($users as $user)
                <div class="rule border-t pt-4 pb-4 first:border-0 first:pt-0 last:pb-0">
                    <dt class="sr-only">Nama</dt>
                    <dd class="font-semibold">{{ $user->nama }}</dd>
                    <dt class="sr-only">NPM dan kelas</dt>
                    <dd class="muted mt-1 text-sm">
                        {{ $user->npm }}, kelas {{ $user->nama_kelas }}
                    </dd>
                </div>
            @endforeach
        </dl>

        <table class="hidden w-full text-left sm:table">
            <thead>
                <tr class="border-b border-orange-200 dark:border-orange-500/30">
                    <th scope="col" class="col-head">Nama</th>
                    <th scope="col" class="col-head">NPM</th>
                    <th scope="col" class="col-head">Kelas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="rule border-b last:border-0">
                        <td class="py-3 font-medium">{{ $user->nama }}</td>
                        <td class="muted py-3">{{ $user->npm }}</td>
                        <td class="muted py-3">{{ $user->nama_kelas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
