<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('profile') }}">
                        <img src="{{ asset('img/kf-logo.png') }}" alt="Kimia Farma Logo" class="block h-9 w-auto">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('profile')" :active="request()->routeIs('profile')">
                        {{ __('Profil Perusahaan') }}
                    </x-nav-link>
                    <x-nav-link :href="route('Information')" :active="request()->routeIs('Information')">
                        {{ __('Informasi K3') }}
                    </x-nav-link>
                    <x-nav-link :href="route('Procedure')" :active="request()->routeIs('Procedure')">
                        {{ __('Prosedur Darurat') }}
                    </x-nav-link>
                    <x-nav-link :href="route('Apd')" :active="request()->routeIs('Apd')">
                        {{ __('Alat Pelindung Diri') }}
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</nav>