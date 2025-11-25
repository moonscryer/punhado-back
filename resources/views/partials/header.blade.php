<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo / Site Title -->
        <a href="/" class="text-2xl font-bold text-gray-800">
            Punhado de Dados Admin
        </a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-6">
            <a href="/games"
               class="px-3 py-2 rounded-md font-medium
               {{ request()->is('games*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:text-indigo-600' }}">
                Games
            </a>
            <a href="/characters"
               class="px-3 py-2 rounded-md font-medium
               {{ request()->is('characters*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:text-indigo-600' }}">
                Characters
            </a>
            <a href="/users"
               class="px-3 py-2 rounded-md font-medium
               {{ request()->is('users*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:text-indigo-600' }}">
                Users
            </a>
        </nav>

        <!-- Mobile Hamburger -->
        <div class="md:hidden">
            <button id="mobileMenuButton" class="text-gray-700 focus:outline-none">
                <!-- Hamburger icon -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-md">
        <a href="/games"
           class="block px-6 py-3 border-b border-gray-200
           {{ request()->is('games*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
            Games
        </a>
        <a href="/characters"
           class="block px-6 py-3 border-b border-gray-200
           {{ request()->is('characters*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
            Characters
        </a>
        <a href="/users"
           class="block px-6 py-3
           {{ request()->is('users*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
            Users
        </a>
    </div>
</header>

<script>
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
