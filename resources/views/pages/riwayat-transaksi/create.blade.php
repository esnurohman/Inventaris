<x-dashboard-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <a href="{{ route('riwayat-transaksi.index') }}" class=" hover:text-blue-500">&laquo; kembali</a>
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Transaksi Baru </h2>
            <form action="{{ route('riwayat-transaksi.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="barang_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">barang_id</label>
                        <select id="barang_id" name="barang_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                            <option selected="" value="0">Select barang_id</option>
                            @foreach ($barangs as $b)
                                <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="tanggal_transaksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tanggal_transaksi </label>
                        <input type="date" name="tanggal_transaksi" id="tanggal_transaksi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="tanggal_pembelian" required="">
                    </div>
                    
                    <div>
                        <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Transaksi</label>
                        <select id="jenis" name="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 ">
                            <option selected="">Select kondisi</option>
                            <option value="masuk">masuk</option>
                            <option value="keluar">keluar</option>
                            <option value="transfer">transfer</option>
                        </select>
                    </div>
                    <div class="">
                        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jumlah barang</label>
                        <input type="number" id="jumlah" name="jumlah" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 " placeholder="Your description here"></input>
                    </div>
                    <div class="">
                        <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">jumlah nominal</label>
                        <input type="number" id="nominal" name="nominal" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 " placeholder="Your description here"></input>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">keterangan</label>
                        <textarea id="keterangan" name="keterangan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 " placeholder="Your description here"></textarea>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-600 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Tambah Kategori
                </button>
            </form>
        </div>
      </section>
</x-dashboard-layout>