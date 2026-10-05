<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="page">
    <x-navbar />

    <main class="mx-auto w-full max-w-3xl flex-1 px-5 py-8">
        @if (session('success'))
            <div role="status" class="mb-6 rounded border-l-4 border-green-600 bg-green-50 px-4 py-3 text-sm text-green-800 dark:bg-green-500/10 dark:text-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div role="alert" class="mb-6 rounded border-l-4 border-red-600 bg-red-50 px-4 py-3 text-sm text-red-800 dark:bg-red-500/10 dark:text-red-300">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    <x-footer />
</body>

</html>
