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
                            <th>Nombre de usuario</th>
                            <th>contraseña</th>
                        </tr>

                        @foreach ($adminis as $ad)
                            <tr>
                                <td>{{$ad->id}}</td>
                                <td>{{$ad->nom_usu}}</td>
                                <td>{{$ad->contraseña}}</td>
                                <td>
                                    <form method='get' action='administrador/{{$ad->id}}/edit'>
                                        <input type='submit' value='Actualizar'>
                                        @csrf
                                        @method("GET")
                                    </form>
                                <td>
                                    <form method='post' action='administrador/{{$ad->id}}'>
                                        <input type='submit' value='Eliminar'>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{Route("administrador.create")}}">Agregar Administrador</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
