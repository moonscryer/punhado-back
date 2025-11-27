<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Punhado de Dados' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    {{-- Include the auth-aware header with tabs --}}
    @include('partials.header')

    {{-- Main Page Content --}}
    <main class="px-6 py-10 flex-1">
        <div class="{{ $width ?? 'max-w-5xl' }} mx-auto">
            @yield('content')
        </div>
    </main>

    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
