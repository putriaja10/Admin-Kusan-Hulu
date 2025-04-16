<x-sidebar.container>
    <div>
        <div class="border">
            <h1 class="text-2xl text-center font-bold">LOGO'S</h1>
        </div>
        <nav class="w-full flex flex-col space-y-1 mt-4">
            <x-sidebar.nav-container>
                <x-sidebar.icon>pie_chart</x-sidebar.icon>
                <x-sidebar.nav-link href="{{ url('/dashboard') }}">DASHBOARD</x-sidebar.nav-link>
            </x-sidebar.nav-container>

            <x-sidebar.nav-container>
                <x-sidebar.icon>pie_chart</x-sidebar.icon>
                <x-sidebar.nav-link href="{{ route('admin.domisili_usaha.index') }}">Domisili Usaha</x-sidebar.nav-link>
            </x-sidebar.nav-container>

            <x-sidebar.nav-container>
                <x-sidebar.icon>pie_chart</x-sidebar.icon>
                <x-sidebar.nav-link href="#">Domisili Penduduk</x-sidebar.nav-link>
            </x-sidebar.nav-container>

            <x-sidebar.nav-container>
                <x-sidebar.icon>pie_chart</x-sidebar.icon>
                <x-sidebar.nav-link href="{{ route('admin.pindah_domisili.index') }}">Pindah Domisili</x-sidebar.nav-link>
            </x-sidebar.nav-container>

            <x-sidebar.nav-container>
                <x-sidebar.icon>pie_chart</x-sidebar.icon>
                <x-sidebar.nav-link href="{{ route('admin.kartu_keluarga.index') }}">Kartu Keluarga</x-sidebar.nav-link>
            </x-sidebar.nav-container>

            <x-sidebar.nav-container>
                <x-sidebar.icon>pie_chart</x-sidebar.icon>
                <x-sidebar.nav-link href="{{ route('admin.penerbitan_akta_kelahiran.index') }}">Akta Kelahiran</x-sidebar.nav-link>
            </x-sidebar.nav-container>

            <x-sidebar.nav-container>
                <x-sidebar.icon>pie_chart</x-sidebar.icon>
                <x-sidebar.nav-link href="{{ route('admin.akta_kematian.index') }}">Akta Kematian</x-sidebar.nav-link>
            </x-sidebar.nav-container>
        </nav>
    </div>
</x-sidebar.container>