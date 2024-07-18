<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Tarjeta') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <form action="" class="max-w-3xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div>
                        <label for="idTargeta" class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-id-card mr-2"></i>
                            Ingrese el id de tarjeta
                        </label>
                        <input type="number" name="idTargeta" value="1782563797" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div>
                        <label for="cedula" class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-address-card mr-2"></i>
                            Ingrese el número de cédula del portador
                        </label>
                        <input type="text" name="cedula" value="00011120022" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>

                <div class="space-y-4">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-user mr-2"></i>
                            Ingrese el nombre del portador de la tarjeta
                        </label>
                        <input type="text" name="nombre" value="Javier" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>

                    <div>
                        <label for="saldo" class="block text-sm font-medium text-gray-700 mb-1">
                            <i class="fas fa-money-bill mr-2"></i>
                            Ingrese el saldo a recargar si el usuario requiere
                        </label>
                        <input type="number" name="saldo" value="valor del pasaje actual"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                </div>
            </div>

            <div class="mt-8 flex justify-center">
                <button type="submit"
                    class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-full border border-blue-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    Crear Tarjeta
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
