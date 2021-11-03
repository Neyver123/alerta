<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CREAR NUEVA PUBLICACION
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="{{route('publicacion.store')}}">
                        @csrf
                        <input type="text" @error("incidente") style="background: indianred" @enderror name="incidente"
                               placeholder="ingrese una breve descripcion del incidente" value="{{old("incidente")}}"><br>
                        <input type="text" @error("lugar") style="border:2px red solid" @enderror name="lugar"
                               placeholder="ingrese la dirección" value="{{old("lugar")}}"><br>
                        <input type="text" @error("fecha") style="border:2px red solid" @enderror name="fecha"
                               placeholder="ingrese la fecha" value="{{old("fecha")}}"><br>
                        <input type="submit" value="Guardar">
                    </form>

                    @if ($errors->any())
                        <div style="color:red">
                            @foreach($errors->all() as $error)
                                {{$error}}<br>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
