<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Punhado' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    @include('partials.header')

    <main class="max-w-6xl mx-auto px-4 py-6">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>