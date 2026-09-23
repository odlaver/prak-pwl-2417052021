@php
    $daftar = request()->is('user');
    $tambah = request()->is('user/create');
@endphp

<nav class="border-b border-[#e7e5e4] dark:border-white/10">
    <div class="mx-auto flex max-w-3xl items-center justify-between gap-4 px-5">
        <a href="/user" class="nav-link px-1 font-semibold">Data Pengguna</a>

        <ul class="flex items-center gap-1">
            <li>
                <a href="/user"
                    @class(['nav-link', 'nav-link-on' => $daftar, 'muted' => !$daftar])>
                    Daftar
                </a>
            </li>
            <li>
                <a href="{{ route('user.create') }}"
                    @class(['nav-link', 'nav-link-on' => $tambah, 'muted' => !$tambah])>
                    Tambah
                </a>
            </li>
        </ul>
    </div>
</nav>
