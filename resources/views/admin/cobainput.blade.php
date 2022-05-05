<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl to-gray-100 leading-tight">
    </h2>

    <form action="{{(isset($coba))?route('coba.update', $coba->id):route('coba.store')}}" method="POST">
        @csrf
        @if (isset($coba))
        @method('PUT')
        @endif
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">
                        <label for="nama" class="block text-sm font-medium text-gray-700">
                            Nama
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="nama" value="{{(isset ($coba))?$coba->nama:old('nama')}}" id="nama" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="jurusan" class="block text-sm font-medium text-gray-700">
                            Jurusan
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="jurusan" value="{{(isset ($coba))?$coba->jurusan:old('jurusan')}}" id="jurusan" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Jurusan">
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">
                            Alamat
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="alamat" value="{{(isset ($coba))?$coba->alamat:old('alamat')}}" id="alamat" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Masukkan Alamat">
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