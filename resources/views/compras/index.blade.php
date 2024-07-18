<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compras') }}
        </h2>
    </x-slot>


 <br>
 <br>

            <div class="w-screen">
                <table class="border border-gray-300 rounded-lg mx-auto">
                    <thead>
                        <tr>
                            <th class="border-b border-gray-300">Nombre de usuario</th>
                            <th class="border-b border-gray-300">Cedula del usuario</th>
                            <th class="border-b border-gray-300">Codigo de targeta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($targetas as $targeta)
                        <tr>
                            <td class="border-b border-gray-300">{{ $targeta->idTargeta }}</td>
                            <td class="border-b border-gray-300">{{ $targeta->nombre }}</td>
                            <td class="border-b border-gray-300">{{ $targeta->cedula }}</td>
                            <td class="border-b border-gray-300">{{ $targeta->saldo }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>





</x-app-layout>

