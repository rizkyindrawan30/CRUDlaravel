<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl to-gray-100 leading-tight">
        {{$title}}
    </h2>

    <form action="{{(isset($databuku))?route('databuku.update', $databuku->id):route('databuku.store')}}" method="POST">
        @csrf
        @if (isset($databuku))
        @method('PUT')
        @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="judul_buku" class="block text-sm font-medium text-gray-700">
                            Judul Buku
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="judul_buku" value="{{(isset ($databuku))?$databuku->judul_buku:old('judul_buku')}}" id="judul_buku" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Judul Buku">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="penerbit" class="block text-sm font-medium text-gray-700">
                            Penerbit
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="penerbit" value="{{(isset ($databuku))?$databuku->penerbit:old('penerbit')}}" id="penerbit" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Penerbit">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="pengarang" class="block text-sm font-medium text-gray-700">
                            Pengarang
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="pengarang" value="{{(isset ($databuku))?$databuku->pengarang:old('pengarang')}}" id="pengarang" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Pengarang">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="jumlah_hal" class="block text-sm font-medium text-gray-700">
                            Jumlah Halaman
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="jumlah_hal" value="{{(isset ($databuku))?$databuku->jumlah_hal:old('jumlah_hal')}}" id="jumlah_hal" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Jumlah Halaman">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="no_rak" class="block text-sm font-medium text-gray-700">
                            No Rak
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="no_rak" value="{{(isset ($databuku))?$databuku->no_rak:old('no_rak')}}" id="no_rak" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="No Rak">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="ISBN" class="block text-sm font-medium text-gray-700">
                            ISBN
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="ISBN" value="{{(isset ($databuku))?$databuku->ISBN:old('ISBN')}}" id="ISBN" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="ISBN">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="tahun_terbit" class="block text-sm font-medium text-gray-700">
                            Tahun Terbit
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="tahun_terbit" value="{{(isset ($databuku))?$databuku->tahun_terbit:old('tahun_terbit')}}" id="tahun_terbit" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Tahun Terbit">
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