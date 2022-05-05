<x-template-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="font-semibold text-xl to-gray-100 leading-tight">

    </h2>

    <a href="{{ route('coba.create') }}">
        <button class="px-2 py-1 mb-2 mt-3 text-sm rounded text-green-600 border border-green-600 hover:bg-green-600 hover:text-white"><i class="fas fa-plus pr-2"></i>Tambah</button>
    </a>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Jurusan
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Alamat
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <?php $no = 1; ?>

            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{$no}}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">

                </td>
                <button type="submit" class="px-4 mt-2 py-1 text-sm rounded text-red-500 border border-red-500 hover:text-white hover:bg-red-600"><i class="fas fa-trash-alt"></i></button>
                </td>
            </tr>
            <?php $no++; ?>

            <!-- More items... -->
        </tbody>
    </table>
    <div class="">

    </div>
</x-template-layout>