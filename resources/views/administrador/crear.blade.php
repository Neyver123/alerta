<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            REGISTRAR ADMINISTRADORES
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('administrador.store')}}">
                        @csrf
                        <input type="text" @error("nomusu") style="background: indianred" @enderror name="nomusu"
                               placeholder="ingrese nombre de usuario" value="{{old("nomusu")}}"><br>
                        <input type="password" @error("contraseña") style="border:2px red solid" @enderror name="contraseña"
                               placeholder="ingrese su contraseña" value="{{old("contraseña")}}"><br>
                        <input type="submit" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
