<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservation.index') }}" class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">Voltar para Reservas</a>
            </div>
            <div class="m-2 p-2 bg-green-600 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form enctype="multipart/form-data">
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm text-bold font-medium text-gray-700"> Nome </label>
                            <div class="mt-1">
                                <input type="text" id="title" wire:model.lazy="title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label for="title" class="block text-sm font-medium text-gray-700">Imagem</label>
                            <div class="mt-1">
                                <input type="file" id="image" wire:model="newImage" name="image" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="body" class="block text-sm font-medium text-gray-700">Descrição</label>
                            <div class="mt-1">
                                <textarea id="body" rows="3" wire:model.lazy="body" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="mt-6 p-4 bg-green-600">
                        <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-black hover:text-white rounded">Cadastrar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>