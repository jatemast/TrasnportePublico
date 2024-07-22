<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compras') }}
        </h2>
    </x-slot>

    <br>
    <br>
    <div class="w-4/5 mx-auto flex justify-end">
        <form method="GET" action="{{ route('compras.buscar') }}">
            <div class="flex items-center justify-center mb-4">
                <label for="site-search" class="mr-2">Buscar usuario</label>
                <input type="search" id="site-search" name="q" class="border border-gray-300 rounded-lg px-2 py-1" />
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Buscar</button>
            </div>
        </form>

    </div>

    <div class="w-4/5 mx-auto">
        <table class="w-full border border-gray-300 rounded-lg">
            <thead>
                <tr>
                    <th class="border-b border-gray-300 text-center py-2">Nombre de usuario</th>
                    <th class="border-b border-gray-300 text-center py-2">Cedula del usuario</th>
                    <th class="border-b border-gray-300 text-center py-2">Codigo de tarjeta</th>
                    <th class="border-b border-gray-300 text-center py-2">Saldo</th>
                    <th class="border-b border-gray-300 text-center py-2">Actualizar</th>
                    <th class="border-b border-gray-300 text-center py-2">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($targetas as $targeta)
                <tr>
                    <td class="border-b border-gray-300 text-center py-2">{{ $targeta->nombre }}</td>
                    <td class="border-b border-gray-300 text-center py-2">{{ $targeta->cedula }}</td>
                    <td class="border-b border-gray-300 text-center py-2">{{ $targeta->idTargeta }}</td>
                    <td class="border-b border-gray-300 text-center py-2">{{ $targeta->saldo }}</td>
                    <td class="border-b border-gray-300 text-center py-2">
                        <a href="{{ route('compras.edit', $targeta->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                            Actualizar usuario

                        </a>
                    </td>

                    <td class="border-b border-gray-300 text-center py-2">
                        <form action="{{ route('compras.destroy', $targeta->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mr-2">
                                Eliminar usuario
                            </button>
                        </form>
                    </td>
                    </td>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
