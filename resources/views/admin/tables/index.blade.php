<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Nova Mesa</a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Convidados
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Disponibilidade
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Localização
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tables as $table)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $table->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $table->guest_number }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->status->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $table->location->name }}
                            </td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="flex space-x-2">
                                    <a class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-black" href="{{ route('admin.tables.edit', $table->id) }}">Editar</a>
                                    <form class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-black" method="POST" action="{{ route('admin.tables.destroy', $table->id) }}" onsubmit="return confirm('Você tem certeza?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Deletar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>