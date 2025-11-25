<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punhado's Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @include('partials.header')

    <main class="container mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Hello, Admin</h1>

        <div class="bg-gray-50 border-l-4 border-gray-400 p-6 mb-8 rounded-lg flex items-start gap-4">
            <svg class="w-6 h-6 text-blue-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"></path>
            </svg>
            <div>
                <p class="text-gray-700 mb-2">
                Welcome to the Punhado de Dados Admin Panel. Here you can manage <strong>Games</strong> and <strong>Characters</strong>.
                </p>
                <p class="text-gray-700 font-medium">
                <strong>Be advised:</strong> Deleting a <strong>Game</strong> will also remove all associated <strong>Characters</strong>. Please proceed with caution!
                </p>
             </div>
        </div>

        <!-- Dashboard Boxes -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            
            <a href="/games"
               class="bg-white p-6 rounded-xl shadow hover:shadow-md transition block">
                <h2 class="text-2xl font-semibold mb-2">Games</h2>
                <p class="text-gray-600">View, create, and edit all games.</p>
            </a>

            <a href="/characters"
               class="bg-white p-6 rounded-xl shadow hover:shadow-md transition block">
                <h2 class="text-2xl font-semibold mb-2">Characters</h2>
                <p class="text-gray-600">Manage player characters and NPCs.</p>
            </a>

            <a href="/users"
               class="bg-white p-6 rounded-xl shadow hover:shadow-md transition block">
                <h2 class="text-2xl font-semibold mb-2">Users</h2>
                <p class="text-gray-600">Administer user accounts and permissions.</p>
            </a>

        </div>
    </main>

    @include('partials.footer')

</body>
</html>