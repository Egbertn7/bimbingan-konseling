<header class="bg-gray-600">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1 items-center gap-x-12">
            <a href="{{ '/' }}" class="text-sm/6 font-semibold text-white">Home</a>

            @auth
                <span class="text-sm/6 font-semibold text-white">{{ auth()->admin()->nama_admin }}</span>

                <form method="POST" action="{{ route('logout.admin') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-sm/6 font-semibold text-white">Logout</button>
                </form>

            @endauth
        </div>
    </nav>
</header>
