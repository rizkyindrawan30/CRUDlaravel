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
                        <label for="id_buku" class="block text-sm font-medium text-gray-700">
                            Kode Buku
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <select name="id_buku" id="id_buku" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($databuku as $item)
                                <option value="{{$item->id}}" {{(old('id_buku') == $item->id||(isset($peminjamanbuku)&&$peminjamanbuku->id_buku==$item->id)) ?'selected' : ''}}> {{$item->kode_buku}} | {{$item->judul_buku}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                    <div class="col-span-3 sm:col-span-2">
                        <label for="id_agt" class="block text-sm font-medium text-gray-700">
                            NIS
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <select name="id_agt" id="id_agt" class="text-gray-700 mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                @foreach ($anggota as $item)
                                <option value="{{$item->id}}" {{(old('id_agt') == $item->id||(isset($peminjamanbuku)&&$peminjamanbuku->id_agt==$item->id)) ?'selected' : ''}}> {{$item->NIS}} | {{$item->nama}} | {{$item->kls}} {{$item->jurusan}}</option>
                                @endforeach
                            </select>
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

<script>
    $(document).ready(function() {
        $('#id_buku').select2();
        $('#id_agt').select2();
    });
</script>