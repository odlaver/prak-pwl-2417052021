<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile {{ $nama }}</title>

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="grid min-h-screen place-items-center bg-[#FDFDFC] p-6 font-sans text-[#1b1b18] dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
        <main class="w-full max-w-xs text-center">
            <div class="mx-auto size-36 overflow-hidden rounded-full bg-orange-100 shadow-glow-lg ring-4 ring-orange-500 dark:bg-[#2b1b10]">
                <svg viewBox="0 0 160 160" fill="currentColor" class="size-full text-white dark:text-orange-300/40">
                    <circle cx="80" cy="62" r="30" />
                    <path d="M18 160c0-38 28-64 62-64s62 26 62 64z" />
                </svg>
            </div>

            <dl class="mt-10 space-y-3">
                @foreach (['Nama' => $nama, 'Kelas' => $kelas, 'NPM' => $npm] as $label => $nilai)
                    <div class="rounded-lg bg-white py-3 shadow-glow ring-1 ring-orange-200 dark:bg-[#1c1410] dark:ring-orange-500/30">
                        <dt class="text-xs tracking-widest text-orange-700 uppercase dark:text-orange-400">{{ $label }}</dt>
                        <dd class="mt-1 text-xl font-semibold">{{ $nilai }}</dd>
                    </div>
                @endforeach
            </dl>
        </main>
    </body>
</html>
