<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar usuario') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <form action="{{ route('compras.update',$targetas->id) }}" method="POST" class="max-w-3xl mx-auto">
            @method('PUT')
            @csrf



            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div>
                <label for="idTargeta" class="block text-sm font-medium text-gray-700 mb-1">
                    <i class="fas fa-id-card mr-2"></i>
                    Ingrese el id de tarjeta
                </label>
                <input type="number" name="idTargeta" value="{{ $targetas->idTargeta }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div>
                <label for="cedula" class="block text-sm font-medium text-gray-700 mb-1">
                    <i class="fas fa-address-card mr-2"></i>
                    Ingrese el número de cédula del portador
                </label>
                <input type="text" name="cedula" value="{{ $targetas->cedula }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
            </div>

            <div class="space-y-4">
                <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                    <i class="fas fa-user mr-2"></i>
                    Ingrese el nombre del portador de la tarjeta
                </label>
                <input type="text" name="nombre" value="{{ $targetas->nombre }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div>
                <label for="saldo" class="block text-sm font-medium text-gray-700 mb-1">
                    <i class="fas fa-money-bill mr-2"></i>
                    Ingrese el saldo a recargar si el usuario requiere
                </label>
                <input type="number" name="saldo" value="{{ $targetas->saldo }}" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
            </div>
            </div>

            <button type="submit" style="background-color: #0ea5e9; color: white; padding: 0.5rem 1rem; border-radius: 9999px; font-weight: bold;">
                Actualizar usuario
            </button>
        </form>
        </form>
    </div>
 <div>
    <img src="{{ asset('targeta.jpg') }}" alt="" style="border-radius: 20%; width: 20%; float: right;">

 </div>
</x-app-layout>
