<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('List Pendaftaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ID Pendaftaran</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ID User</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Foto</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">Nama Lengkap</th>
                                <th colspan="2" scope="colgroup" class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left"><center>Aksi</center></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                            @foreach ($pendaftarans as $pendaftaran)
                                <tr>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $pendaftaran->id }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $pendaftaran->user_id }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400"><img src="{{ $pendaftaran->foto }}" alt="No Image" width="450 px" height="660 px"/></td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">{{ $pendaftaran->nama_lengkap }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                        <center>
                                            <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}">
                                                <x-secondary-button class="ms-3">Edit</x-secondary-button>
                                            </a>
                                        </center>
                                    </td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                        <center>
                                            <form action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <x-danger-button class="ms-3" type="submit">Delete</x-danger-button>
                                            </form>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>