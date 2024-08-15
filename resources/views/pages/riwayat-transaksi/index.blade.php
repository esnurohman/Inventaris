<x-dashboard-layout>
    <section class="h-auto p-4 bg-gray-50">
        <div class="max-w-screen-xl px-4 mx-auto lg:px-12">
            @if(session('success'))
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg ">{{ session('success') }}</div>
            @endif
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md sm:rounded-lg">
                <div class="flex flex-col items-center justify-between p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                    <div class="w-full md:w-1/2">
                        <div class="flex flex-col items-center justify-center md:items-start md:justify-start ">
                            <div class="text-2xl font-bold">Daftar Transaksi</div>
                            <div class="text-sm text-slate-400">Semua transaksi: 
                                
                                    
                                <span class="font-semibold text-black">
                                {{ $transaksis->count() }}</span> 
                                
                                Hasil</div>
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch justify-end flex-shrink-0 w-full space-y-2 md:w-auto md:flex-row md:space-y-0 md:items-center md:space-x-3">
                        <a href="/dashboard/riwayat-transaksi/create">
                            <button  type="button" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:opacity-90 focus:ring-4 focus:ring-primary-300 ">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Tambah Baru
                            </button>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table id="TableList" class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                            <tr>
                                <th scope="col" class="w-2 px-4 py-3">#</th>
                                <th scope="col" class="px-4 py-3">ID / Nama barang</th>
                                <th scope="col" class="px-4 py-3">Tanggal transaksi</th>
                                <th scope="col" class="px-4 py-3">Jenis transaksi</th>
                                <th scope="col" class="px-4 py-3">Jumlah barang</th>
                                <th scope="col" class="px-4 py-3">Nominal</th>
                                <th scope="col" class="px-4 py-3">Keterangan</th>
                                <th scope="col" class="px-4 py-3">Update at</th>
                                <th scope="col" class="w-5 px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($transaksis as $t )
                            <tr class="border-b ">
                                
                                <th scope="row" class="w-2 px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $t->barang_id }}
                                    
                                </th>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ Carbon\Carbon::parse($t->tanggal_transaksi)->translatedFormat('l d-M-Y') }}
                                </th>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $t->jenis }}
                                </th>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $t->jumlah }}
                                </th>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ "Rp. " . number_format($t->nominal) }}
                                </th>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $t->keterangan }}
                                </th>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ Carbon\Carbon::parse($t->updated_at)->diffForHumans() }}
                                </th>
                                <td class="gap-1 px-4 py-3 ">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('riwayat-transaksi.destroy', $t->id) }}" method="POST" class="flex items-center justify-center">
                                        
                                        <a href="#" class="flex items-center justify-center w-full h-8 px-4 mr-2 text-white bg-green-400 rounded-lg cursor-pointer hover:opacity-90">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="flex items-center justify-center w-full h-8 px-4 text-white bg-red-400 rounded-lg cursor-pointer hover:opacity-90">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-dashboard-layout>