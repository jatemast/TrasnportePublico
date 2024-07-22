<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Tarjeta') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8 flex flex-wrap">
        <div class="max-w-3xl mx-auto w-full md:w-2/3 pr-8">
            <div>
                <h1 class="text-2xl font-bold mb-4">Actualizar usuario</h1>
                <form action="{{ route('compras.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="idTargeta" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-id-card mr-2"></i>Ingrese el id de tarjeta
                            </label>
                            <input type="number" name="idTargeta"
                                class="input-field">
                        </div>

                        <div>
                            <label for="cedula" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-address-card mr-2"></i>Ingrese el número de cédula del portador
                            </label>
                            <input type="text" name="cedula"
                                class="input-field">
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-user mr-2"></i>Ingrese el nombre del portador de la tarjeta
                            </label>
                            <input type="text" name="nombre"
                                class="input-field">
                        </div>

                        <div>
                            <label for="saldo" class="block text-sm font-medium text-gray-700 mb-1">
                                <i class="fas fa-money-bill mr-2"></i>Ingrese el saldo a recargar si el usuario requiere
                            </label>
                            <input type="number" name="saldo"
                                class="input-field">
                        </div>
                    </div>

                    <button type="submit" class="button-primary mt-4">
                        Crear Tarjeta
                    </button>
                </form>
            </div>
        </div>

        <div class="w-full md:w-1/3 mt-8 md:mt-0">
            <div class="mx-auto max-w-md">
                <h1 class="text-2xl font-bold mb-4">Recargar tarjeta</h1>
                <form action="{{ route('recargar') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="codigo" class="block text-sm font-medium text-gray-700">Código de tarjeta</label>
                        <input type="number" name="codigo" class="input-field" required>
                    </div>

                    <div class="mb-4">
                        <label for="saldo-recarga" class="block text-sm font-medium text-gray-700">Saldo a recargar</label>
                        <input type="number" name="saldo-recarga" class="input-field" required>
                    </div>

                    <button type="submit" class="button-primary">
                        Recargar Tarjeta
                    </button>
                </form>

            </div>
        </div>

        <div class="w-full mt-8 md:w-1/3 md:ml-auto">
            <img src="{{ asset('targeta.jpg') }}" alt="Logo de tarjeta" class="rounded-lg" style="width: 80%;">
        </div>
    </div>
</x-app-layout>

<style>
    .input-field {
        width: 100%;
        padding: 8px;
        border: 1px solid #d2d6dc;
        border-radius: 4px;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .input-field:focus {
        border-color: #0ea5e9;
        outline: 0;
        box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
    }

    .button-primary {
        background-color: #0ea5e9;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 9999px;
        font-weight: bold;
        cursor: pointer;
    }

    .button-primary:hover {
        background-color: #057ab0;
    }
</style>
