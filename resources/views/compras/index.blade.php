<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compras') }}

          
       
    </x-slot>

    <br>
    <br>

    <div class="w-4/5 mx-auto">
        <table class="w-full border border-gray-300 rounded-lg">
            <thead>
                <tr>
                    <th class="border-b border-gray-300 text-center">Nombre de usuario</th>
                    <th class="border-b border-gray-300 text-center">Cedula del usuario</th>
                    <th class="border-b border-gray-300 text-center">Codigo de tarjeta</th>
                    <th class="border-b border-gray-300 text-center">Saldo</th>
                    <th class="border-b border-gray-300 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($targetas as $targeta)
                <tr>
                    <td class="border-b border-gray-300 text-center">{{ $targeta->nombre }}</td>
                    <td class="border-b border-gray-300 text-center">{{ $targeta->cedula }}</td>
                    <td class="border-b border-gray-300 text-center">{{ $targeta->idTargeta }}</td>
                    <td class="border-b border-gray-300 text-center">{{ $targeta->saldo }}</td>
                    <td class="border-b border-gray-300 text-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                            Actualizar usuario
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>