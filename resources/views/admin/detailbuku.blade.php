<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl to-gray-100 leading-tight">
        {{$title}}
    </h2>

    <a href="{{ route('databuku.index') }}">
        <button class="px-2 py-1 mb-2 mt-3 text-sm rounded text-green-600 border border-green-600 hover:bg-green-600 hover:text-white"><i class="fas fa-chevron-circle-left"></i> Kembali</button>
    </a>
    <table>
        <tr>
            <td>Judul Buku</td>
            <td> : </td>
            <td>{{$databuku->judul_buku}}</td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td> : </td>
            <td>{{$databuku->pengarang}}</td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td> : </td>
            <td>{{$databuku->penerbit}}</td>
        </tr>
        <tr>
            <td>Cetakan</td>
            <td> : </td>
            <td>{{$databuku->cetakan}}</td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td> : </td>
            <td>{{$databuku->tahun_terbit}}</td>
        </tr>
        <tr>
            <td>Kode Lemari</td>
            <td> : </td>
            <td>{{$databuku->kode_lemari}}</td>
        </tr>
        <tr>
            <td>Jumlah Buku</td>
            <td> : </td>
            <td>{{$databuku->jumlah_buku}}</td>
        </tr>
        <tr>
            <td>ISBN</td>
            <td> : </td>
            <td>{{$databuku->ISBN}}</td>
        </tr>
        <tr>
            <td>Klasifikasi</td>
            <td> : </td>
            <td>{{$databuku->klasifikasi}}</td>
        </tr>
        <tr>
            <td>Kode Buku</td>
            <td> : </td>
            <td>{{$databuku->kode_buku}}</td>
        </tr>
    </table>
</x-template-layout>