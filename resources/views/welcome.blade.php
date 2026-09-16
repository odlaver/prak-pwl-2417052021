<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Praktikum') }}</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                :root { color-scheme: light dark; }
                * { box-sizing: border-box; }
                body {
                    margin: 0;
                    min-height: 100vh;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    padding: 1.5rem;
                    background: #fdfdfc;
                    color: #1b1b18;
                    font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
                }
                .kartu {
                    width: 100%;
                    max-width: 36rem;
                    border: 1px solid #e3e3e0;
                    border-radius: 1rem;
                    background: #fff;
                    padding: 2.5rem;
                }
                .label { margin: 0; font-size: .75rem; letter-spacing: .2em; text-transform: uppercase; color: #706f6c; }
                .nama { margin: 1rem 0 0; font-size: 2rem; font-weight: 600; }
                .npm { margin: .5rem 0 0; font-size: 1.125rem; color: #706f6c; }
                .meta { margin: 2rem 0 0; padding-top: 1.5rem; border-top: 1px solid #e3e3e0; display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; font-size: .875rem; }
                .meta dt { color: #706f6c; }
                .meta dd { margin: .25rem 0 0; font-weight: 500; }
                @media (prefers-color-scheme: dark) {
                    body { background: #0a0a0a; color: #ededec; }
                    .kartu { background: #141413; border-color: #2a2a28; }
                    .label, .npm, .meta dt { color: #a1a09a; }
                    .meta { border-top-color: #2a2a28; }
                }
            </style>
        @endif
    </head>
    <body class="flex min-h-screen items-center justify-center bg-[#FDFDFC] p-6 font-sans text-[#1b1b18] antialiased dark:bg-[#0a0a0a] dark:text-[#EDEDEC]">
        <main class="kartu w-full max-w-xl rounded-2xl border border-[#e3e3e0] bg-white p-10 dark:border-[#2a2a28] dark:bg-[#141413]">
            <p class="label text-xs uppercase tracking-[0.2em] text-[#706f6c] dark:text-[#A1A09A]">
                Praktikum Pemrograman Web
            </p>

            <h1 class="nama mt-4 text-3xl font-semibold sm:text-4xl">R. Revaldo Vabiansyah</h1>
            <p class="npm mt-2 text-lg text-[#706f6c] dark:text-[#A1A09A]">NPM 2417052021</p>

            <dl class="meta mt-8 grid grid-cols-2 gap-4 border-t border-[#e3e3e0] pt-6 text-sm dark:border-[#2a2a28]">
                <div>
                    <dt class="text-[#706f6c] dark:text-[#A1A09A]">Framework</dt>
                    <dd class="mt-1 font-medium">Laravel {{ app()->version() }}</dd>
                </div>
                <div>
                    <dt class="text-[#706f6c] dark:text-[#A1A09A]">PHP</dt>
                    <dd class="mt-1 font-medium">{{ PHP_VERSION }}</dd>
                </div>
            </dl>
        </main>
    </body>
</html>
