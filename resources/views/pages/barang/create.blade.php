<x-dashboard-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <a href="{{ route('barang.index') }}" class=" hover:text-blue-500">&laquo; kembali</a>
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Barang Baru </h2>
            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Type product name" required="">
                    </div>
                    @if ($kategoris->isEmpty())
                        <div>Kamu harus membuat kategori terlebih dahulu</div>
                    @else
                    <div class="sm:col-span-2">
                        <label for="kategori_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategori</label>
                        <select id="kategori_id" name="kategori_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                            <option selected="" value="0">Select category</option>
                            @foreach ($kategoris as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="w-full">
                        <label for="merek" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Merek</label>
                        <input type="text" name="merek" id="merek" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Merek barang" required="">
                    </div>
                    <div class="w-full">
                        <label for="model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model</label>
                        <input type="text" name="model" id="model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Model barang" required="">
                    </div>
                   
                    <div>
                        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Jumlah barang yang tersedia." required="">
                    </div> 
                    <div>
                        <label for="satuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan (pcs, kg, dll)</label>
                        <input type="text" name="satuan" id="satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Satuan barang (misalnya: buah, set, liter)." required="">
                    </div> 
                    <div>
                        <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">lokasi barang disimpan</label>
                        <input type="text" name="lokasi" id="lokasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Gudang." required="">
                    </div> 
                    <div>
                        <label for="kondisi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kondisi</label>
                        <select id="kondisi" name="kondisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                            <option selected="">Select kondisi</option>
                            <option value="baik">Baik</option>
                            <option value="rusak">Rusak</option>
                            <option value="hilang">Hilang</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="tanggal_pembelian" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tanggal_pembelian </label>
                        <input type="date" name="tanggal_pembelian" id="tanggal_pembelian" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="tanggal_pembelian" required="">
                    </div>
                    <div>
                        <label for="harga_beli" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Beli satuan</label>
                        <input type="number" name="harga_beli" id="harga_beli" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Harga beli barang" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="supplier_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier</label>
                        <select id="supplier_id" name="supplier_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                            <option selected="" value="0">Select supplier</option>
                            @foreach ($suppliers as $s)
                                <option value="{{ $s->id }}">{{ $s->nama_supplier }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div>
                        
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto">Upload foto</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none " aria-describedby="file_input_help" id="foto" name="foto" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                    </div>

                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-600 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Tambah Barang
                </button>
            </form>
        </div>
      </section>
</x-dashboard-layout>