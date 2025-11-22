<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-white shadow p-4 mb-6">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Punhado Dashboard</h1>
            <div class="space-x-4">
                <a href="/" class="text-gray-700 hover:text-black">Home</a>
                <a href="/about" class="text-gray-700 hover:text-black">About</a>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-3xl font-semibold mb-4 text-gray-800">Games</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($games as $game)
                <div class="bg-white shadow rounded-xl p-5">
                    <h3 class="text-xl font-bold mb-2 text-gray-900">{{ $game->name }}</h3>
                    <p class="text-gray-700 mb-3">{{ $game->description }}</p>
                    <p class="text-sm text-gray-500 mb-2"><strong>System:</strong> {{ $game->system }}</p>

                    @if ($game->characters->count())
                        <div class="mt-4">
                            <h4 class="font-semibold text-gray-800 mb-2">Characters:</h4>
                            <ul class="list-disc list-inside text-gray-700">
                                @foreach ($game->characters as $character)
                                    <li>
                                        <span class="font-medium">{{ $character->name }}</span>
                                        <span class="text-sm text-gray-500">({{ $character->player }})</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>