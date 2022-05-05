<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl to-gray-100 leading-tight">
        {{$title}}
    </h2>

    <form action="{{(isset($peminjamanbuku))?route('peminjamanbuku.update', $peminjamanbuku->id):route('peminjamanbuku.store')}}" method="POST">
        @csrf
        @if (isset($peminjamanbuku))
        @method('PUT')
        @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="tanggal_pinjam" class="block text-sm font-medium text-gray-700">
                            Tanggal Pinjam
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="date" name="tanggal_pinjam" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->tanggal_pinjam:old('tanggal_pinjam')}}" id="tanggal_pinjam" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Pinjam">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="tanggal_kembali" class="block text-sm font-medium text-gray-700">
                            Tanggal Kembali
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="date" name="tanggal_kembali" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->tanggal_kembali:old('tanggal_kembali')}}" id="tanggal_kembali" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="kode_buku" class="block text-sm font-medium text-gray-700">
                            Kode Buku
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="kode_buku" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->kode_buku:old('kode_buku')}}" id="kode_buku" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="judul_buku" class="block text-sm font-medium text-gray-700">
                            Judul Buku
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="judul_buku" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->judul_buku:old('judul_buku')}}" id="judul_buku" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="NIS" class="block text-sm font-medium text-gray-700">
                            NIS
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="NIS" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->NIS:old('NIS')}}" id="NIS" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="nama" class="block text-sm font-medium text-gray-700">
                            Nama
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="nama" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->nama:old('nama')}}" id="nama" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="kelas" class="block text-sm font-medium text-gray-700">
                            Kelas
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="kelas" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->kelas:old('kelas')}}" id="kelas" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="jurusan" class="block text-sm font-medium text-gray-700">
                            Jurusan
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="jurusan" value="{{(isset ($peminjamanbuku))?$peminjamanbuku->jurusan:old('jurusan')}}" id="jurusan" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Tanggal Kembali">
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Save
                </button>
            </div>
        </div>
    </form>

</x-template-layout>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- <script>
    $(document).ready(function() {
        $('#id_buku').select2();
        $('#id_agt').select2();
    });
</script> -->