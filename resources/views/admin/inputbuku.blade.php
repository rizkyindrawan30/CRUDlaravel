<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class=" mt-2 mb-6 font-semibold text-xl to-gray-100 leading-tight">
        {{$title}}
    </h2>

    <form action="{{(isset($databuku))?route('databuku.update', $databuku->id):route('databuku.store')}}" method="POST">
        @csrf
        @if (isset($databuku))
        @method('PUT')
        @endif

        <table class="min-w-full border-r-2 border-l-2 border-gray-200">
            <tr height="55px" class="border-t-2 border-b-2 border-gray-200">
                <td widht="200px">
                    <label for="judul_buku" class="block text-sm font-medium text-gray-700">
                        Judul Buku
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="judul_buku" value="{{(isset ($databuku))?$databuku->judul_buku:old('judul_buku')}}" id="judul_buku" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Judul Buku">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="pengarang" class="block text-sm font-medium text-gray-700">
                        Pengarang
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="pengarang" value="{{(isset ($databuku))?$databuku->pengarang:old('pengarang')}}" id="pengarang" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Pengarang">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="bahasa" class="block text-sm font-medium text-gray-700">
                        Bahasa
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="bahasa" value="{{(isset ($databuku))?$databuku->bahasa:old('bahasa')}}" id="bahasa" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="bahasa">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="penerjemah" class="block text-sm font-medium text-gray-700">
                        Penerjemah
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="penerjemah" value="{{(isset ($databuku))?$databuku->penerjemah:old('penerjemah')}}" id="penerjemah" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="penerjemah">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="penerbit" class="block text-sm font-medium text-gray-700">
                        Penerbit
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="penerbit" value="{{(isset ($databuku))?$databuku->penerbit:old('penerbit')}}" id="penerbit" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Penerbit">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="tempat_terbit" class="block text-sm font-medium text-gray-700">
                        Tempat Terbit
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="tempat_terbit" value="{{(isset ($databuku))?$databuku->tempat_terbit:old('tempat_terbit')}}" id="tempat_terbit" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="tempat_terbit">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="cetakan" class="block text-sm font-medium text-gray-700">
                        Cetakan
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="cetakan" value="{{(isset ($databuku))?$databuku->cetakan:old('cetakan')}}" id="cetakan" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="cetakan">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="tahun_terbit" class="block text-sm font-medium text-gray-700">
                        Tahun Terbit
                    </label>
                </td>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="tahun_terbit" value="{{(isset ($databuku))?$databuku->tahun_terbit:old('tahun_terbit')}}" id="tahun_terbit" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Tahun Terbit">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="kode_lemari" class="block text-sm font-medium text-gray-700">
                        Kode Lemari
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="kode_lemari" value="{{(isset ($databuku))?$databuku->kode_lemari:old('kode_lemari')}}" id="kode_lemari" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="kode_lemari">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="jumlah_buku" class="block text-sm font-medium text-gray-700">
                        Jumlah Buku
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="jumlah_buku" value="{{(isset ($databuku))?$databuku->jumlah_buku:old('jumlah_buku')}}" id="jumlah_buku" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Jumlah Buku">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="ISBN" class="block text-sm font-medium text-gray-700">
                        ISBN
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="ISBN" value="{{(isset ($databuku))?$databuku->ISBN:old('ISBN')}}" id="ISBN" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="ISBN">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="klasifikasi" class="block text-sm font-medium text-gray-700">
                        Klasifikasi
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="klasifikasi" value="{{(isset ($databuku))?$databuku->klasifikasi:old('klasifikasi')}}" id="klasifikasi" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="klasifikasi">
                    </div>
                </td>
            </tr>
            <tr height="55px" class="border-b-2 border-gray-200">
                <td>
                    <label for="kode_buku" class="block text-sm font-medium text-gray-700">
                        Kode Buku
                    </label>
                </td>
                <td> : </td>
                <td>
                    <div class="flex rounded-md shadow-sm">
                        <input type="text" name="kode_buku" value="{{(isset ($databuku))?$databuku->kode_buku:old('kode_buku')}}" id="kode_buku" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Kode Buku">
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </td>
            </tr>
        </table>
    </form>

</x-template-layout>