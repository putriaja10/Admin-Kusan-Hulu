<x-layout>
    <x-container.dashboard>
        <x-sidebar.sidebar />
    
        <div class="hidden">
            <div>
                @guest
                    <a href="{{ url('/register') }}">Register</a>
                    <a href="{{ url('/login') }}">Log In</a>
                @endguest
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form>
                @endauth
            </div>
    
            <div>
                <aside>
                    <div>
                        <a href="{{ url('/dashboard') }}">Beranda</a>
                        <a href="{{ url('/admin/domisili-usaha') }}">Domisili usaha</a>
                        <a href="{{ url('/admin/penduduk') }}">Domisili penduduk</a>
                        <a href="{{ url('/admin/pindah-domisili') }}">Pindah domisili</a>
                        <a href="{{ url('/admin/kartu-keluarga') }}">Kartu keluarga</a>
                        <a href="{{ url('/admin/penerbitan-akta-kelahiran') }}">Akta kelahiran</a>
                        <a href="{{ url('/admin/akta-kematian') }}">Akta kematian</a>
                        <a href="{{ url('/admin/akun') }}">Akun</a>
                    </div>
                </aside>
            </div>
        </div>
    
        <x-container.main class="flex flex-col space-y-4">
            <x-header />

            <!-- Mini card -->
            <div class="flex px-6 space-x-4">
                <x-card-small.container>
                    <span class="bg-gray-500 w-12 h-12 rounded-full"></span>
                    <div class="flex flex-col">
                        <x-card-small.h1>DOMISILI USAHA</x-card-small.h1>
                        <x-card-small.number>20</x-card-small.number>
                    </div>
                </x-card-small.container>

                <x-card-small.container>
                    <span class="bg-gray-500 w-12 h-12 rounded-full"></span>
                    <div class="flex flex-col">
                        <x-card-small.h1>DOMISILI USAHA</x-card-small.h1>
                        <x-card-small.number>20</x-card-small.number>
                    </div>
                </x-card-small.container>

                <x-card-small.container>
                    <span class="bg-gray-500 w-12 h-12 rounded-full"></span>
                    <div class="flex flex-col">
                        <x-card-small.h1>DOMISILI USAHA</x-card-small.h1>
                        <x-card-small.number>20</x-card-small.number>
                    </div>
                </x-card-small.container>

                <x-card-small.container>
                    <span class="bg-gray-500 w-12 h-12 rounded-full"></span>
                    <div class="flex flex-col">
                        <x-card-small.h1>DOMISILI USAHA</x-card-small.h1>
                        <x-card-small.number>20</x-card-small.number>
                    </div>
                </x-card-small.container>
            </div>

            <!-- Table content -->
            <div class="px-6">
                <div class="">
                    <x-header.container class="bg-blue-400/80 rounded-t-lg">
                        <div>
                            <h1 class="text-white text-xl font-bold">DOMISILI USAHA</h1>
                        </div>
                        <div>
                            <x-header.search type="text" placeholder="Cari..." class="border-white text-white" />
                        </div>
                    </x-header.container>
    
                    <x-table.table>
                        <x-table.thead>
                            <x-table.tr>
                                <x-table.td>Head table</x-table.td>
                                <x-table.td>Head table</x-table.td>
                                <x-table.td>Head table</x-table.td>
                            </x-table.tr>
                        </x-table.thead>
                        <x-table.tbody>
                            <x-table.tr>
                                <x-table.td>Data table</x-table.td>
                                <x-table.td>Data table</x-table.td>
                                <x-table.td>Data table</x-table.td>
                            </x-table.tr>
                        </x-table.tbody>
                    </x-table.table>
    
                    <div class="border border-gray-700 w-full px-4 py-2 flex justify-between items-center rounded-b-lg">
                        <a href="#" class="bg-blue-400/80 px-3 py-1 text-gray-100 text-base font-bold rounded-sm">< Previous</a>
                        <a href="#" class="bg-blue-400/80 px-3 py-1 text-gray-100 text-base font-bold rounded-sm">Next ></a>
                    </div>
                </div>
            </div>

        </x-container.main>
    </x-container.dashboard>

</x-layout>