<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h1 class="font-semibold pt-2 text-xl to-gray-100 leading-tight">
        {{$title}}
    </h1>
    <a href="{{ route('peminjamanbuku.create') }}">
        <button class="px-2 py-1 mb-2 mt-3 text-sm rounded text-green-600 border border-green-600 hover:bg-green-600 hover:text-white"><i class="fas fa-plus pr-2"></i>Tambah</button>
    </a>
    <!-- Table -->
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Tanggal Pinjam
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Tanggal Kembali
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Kode Buku
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Judul Buku
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    NIS
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nama Anggota
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Jurusan
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php $no = 1; ?>
            @foreach ($peminjaman as $item)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$no}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->tanggal_pinjam}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->tanggal_kembali}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->kode_buku}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->judul_buku}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->NIS}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->nama}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->kelas}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$item->jurusan}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <form action="{{route('peminjamanbuku.destroy', $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('peminjamanbuku.edit',$item->id)}}" class="px-4 py-1 text-sm rounded text-blue-600 border border-blue-500 hover:text-white hover:bg-blue-600"><i class="fas fa-pencil-alt"></i> Mengembalikan</a>
                        <button type="submit" class="px-4 mt-2 py-1 text-sm rounded text-red-500 border border-red-500 hover:text-white hover:bg-red-600"><i class="fas fa-trash-alt"></i> Hapus</button>
                    </form>
                </td>
            </tr>
            <?php $no++; ?>
            @endforeach
            <!-- More items... -->
        </tbody>
    </table>

</x-template-layout>