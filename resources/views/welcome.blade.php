<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punhado's Admin Home</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    @include('partials.header')

    <main class="container mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Welcome, Admin</h1>

        <p class="text-lg text-gray-700 mb-12">
            Use the navigation above to manage Games, Characters, and Users in the system.
        </p>

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