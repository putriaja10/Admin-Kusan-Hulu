<x-header.container class="bg-orange-400 shadow-md shadow-gray-300">
    <x-header.search type="text" placeholder="Cari..." class="border-white text-white" />
    
    <div class="flex gap-2">
        @guest
            <x-header.button-link href="{{ url('/register') }}">Register</x-header.button-link>
            <x-header.button-link href="{{ url('/login') }}">Log In</x-header.button-link>
        @endguest
        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-header.button type="submit">Log Out</x-header.button>
            </form>
        @endauth
    </div>
</x-header.container>