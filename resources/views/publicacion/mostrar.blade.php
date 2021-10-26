<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($titulo) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table w-full">
                        <tr>
                            <th>id</th>
                            <th>id usuario</th>
                            <th>incidente</th>
                            <th>lugar</th>
                            <th>Fecha</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>

                        @foreach ($publi as $pub)
                            <tr>
                                <td>{{$pub->id}}</td>
                                <td>{{$pub->id_usuario}}</td>
                                <td>{{$pub->incidente}}</td>
                                <td>{{$pub->lugar}}</td>
                                <td>{{$pub->fecha}}</td>
                                <td>
                                    <form method='get' action='publicacion/{{$pub->id}}/edit'>
                                        <input type='submit' value='Actualizar'>
                                        @csrf
                                        @method("GET")
                                    </form>
                                <td>
                                    <form method='post' action='publicacion/{{$pub->id}}'>
                                        <input type='submit' value='Elimnar'>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{Route("publicacion.create")}}">Agregar publicacion</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
