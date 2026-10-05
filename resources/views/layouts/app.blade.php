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
        @yield('content')
    </main>

    <x-footer />
</body>

</html>
