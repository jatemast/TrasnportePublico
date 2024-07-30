<x-guest-layout>
  

    <!-- Título -->
    <div class="flex justify-center mt-4">
        <h1 class="text-4xl font-bold text-gray-700">Bienvenido a Transportes Teheran</h1>
    </div>

    <!-- Opciones de Iniciar sesión y Crear cuenta -->
    <div class="flex justify-center mt-8 space-x-4">
        <a href="{{ route('login') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition duration-300 ease-in-out">Iniciar sesión</a>
        <a href="{{ route('register') }}" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700 transition duration-300 ease-in-out">Crear cuenta</a>
    </div>
</x-guest-layout>
