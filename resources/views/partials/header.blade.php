<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Logo / Site Title -->
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold text-gray-800">
            Punhado de Dados Admin
        </a>

        <!-- Desktop Navigation -->
        <!-- Desktop Navigation -->
<nav class="hidden md:flex items-center space-x-6">

    @auth
        <a href="{{ route('games.index') }}"
           class="px-3 py-2 rounded-md font-medium
           {{ request()->is('admin/games*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:text-indigo-600' }}">
            Games
        </a>

        <a href="{{ route('characters.index') }}"
           class="px-3 py-2 rounded-md font-medium
           {{ request()->is('admin/characters*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:text-indigo-600' }}">
            Characters
        </a>

        @if(auth()->user()->super_user)
            <a href="{{ route('users.index') }}"
               class="px-3 py-2 rounded-md font-medium
               {{ request()->is('admin/users*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:text-indigo-600' }}">
                Users
            </a>
        @endif

        <!-- Logout -->
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit"
                class="px-3 py-2 rounded-md bg-red-500 text-white hover:bg-red-600">
                Logout
            </button>
        </form>
    @else
        <!-- Login -->
        <a href="{{ route('login') }}"
           class="px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700">
            Login
        </a>
    @endauth
</nav>

        <!-- Mobile Hamburger -->
        <div class="md:hidden">
            <button id="mobileMenuButton" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-md">

        @auth
            <a href="{{ route('games.index') }}"
               class="block px-6 py-3 border-b border-gray-200
               {{ request()->is('games*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
                Games
            </a>

            <a href="{{ route('characters.index') }}"
               class="block px-6 py-3 border-b border-gray-200
               {{ request()->is('characters*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
                Characters
            </a>

            @if(auth()->user()->super_user)
                <a href="{{ route('users.index') }}"
                   class="block px-6 py-3 border-b border-gray-200
                   {{ request()->is('users*') ? 'bg-indigo-600 text-white' : 'text-gray-700 hover:bg-indigo-50' }}">
                    Users
                </a>
            @endif

            <!-- Logout -->
            <form action="{{ route('logout') }}" method="POST" class="block px-6 py-3">
                @csrf
                <button type="submit" class="w-full text-left text-red-600 hover:bg-red-50">
                    Logout
                </button>
            </form>

        @else

            <a href="{{ route('login') }}"
               class="block px-6 py-3 text-gray-700 hover:bg-indigo-50">
                Login
            </a>

        @endauth

    </div>
</header>

<script>
    const mobileMenuButton = document.getElementById('mobileMenuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
