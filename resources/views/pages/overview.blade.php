<x-dashboard-layout>
  <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg ">
    <div class="uppercase">SELAMAT DATANG, 
      <a href="{{ route('profile.edit') }}"><span class="font-bold underline">{{ Auth::user()->name }}</span></a>!
    </div>
  </div>
  <div class="grid grid-cols-1 gap-4 mb-4 sm:grid-cols-2 lg:grid-cols-4">
      
      <div class="h-32 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-64">
        <span class="flex justify-center w-full mx-auto text-xl font-bold uppercase border-2"> Barang</span>
        
        <div class="relative overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="px-6 py-3">
                          Nama Barang
                      </th>
                      <th scope="col" class="px-6 py-3">
                          Jumlah
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($barangs as $b)
                    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $b->nama_barang }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $b->jumlah }} 
                    </td>
                    
                </tr>
                @endforeach
                  
              </tbody>
          </table>
        </div>
      </div>
      <div class="h-32 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-64"> 
        <span class="flex justify-center w-full mx-auto text-xl font-bold uppercase border-2"> Transaksi terakhir</span>
        
        <div class="relative overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
              <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                  <tr>
                      <th scope="col" class="p-2">
                          ID Barang
                      </th>
                      <th scope="col" class="p-2">
                          Keterangan
                      </th>
                  </tr>
              </thead>
              <tbody>
                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                  @if ($transaksis->isEmpty())
                        
                    @else
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ $transaksis->first()->barang_id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ Str::limit($transaksis->first()->keterangan, 30) }} 
                    </td>
                    
                    @endif
                  
                </tr>
                
                  
              </tbody>
          </table>
        </div>

        
      </div>
      <div class="h-32 rounded-lg dark:border-gray-600 md:h-64">
        <span class="flex justify-center w-full mx-auto text-xl font-bold uppercase border-2">Total Pembelian</span>
        <div class="items-center text-center ">{{ "Rp" . number_format($pembelian->sum('nominal')) }}</div>
      </div>
      <div class="h-32 rounded-lg dark:border-gray-600 md:h-64">
        <span class="flex justify-center w-full mx-auto text-xl font-bold uppercase border-2">Total Penjualan</span>
        <div class="items-center text-center">{{ "Rp" . number_format($penjualan->sum('nominal')) }}</div>
      </div>
      </div>

      <div
        class="mb-4 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 h-96"
      >
      </div>

      <div class="grid grid-cols-2 gap-4 mb-4">
        <div
          class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
        ></div>
        <div
          class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
        ></div>
        <div
          class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
        ></div>
        <div
          class="h-48 border-2 border-gray-300 border-dashed rounded-lg dark:border-gray-600 md:h-72"
        ></div>
      </div>
    </div>
  
      
</x-dashboard-layout>