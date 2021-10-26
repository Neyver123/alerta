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
                            <th>nombre</th>
                            <th>correo</th>
                            <th>contraseña</th>
                            <th>Fecha de creacion</th>
                            <th>&nbsp</th>
                            <th>&nbsp</th>
                        </tr>

                        @foreach ($users as $use)
                            <tr>
                                <td>{{$use->id}}</td>
                                <td>{{$use->name}}</td>
                                <td>{{$use->email}}</td>
                                <td>{{$use->password}}</td>
                                <td>{{$use->created_at}}</td>
                                <td>
                                    <form method='get' action='usuario/{{$use->id}}/edit'>
                                        <input type='submit' value='Actualizar'>
                                        @csrf
                                        @method("GET")
                                    </form>
                                <td>
                                    <form method='post' action='usuario/{{$use->id}}'>
                                        <input type='submit' value='Elimnar'>
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{Route("usuario.create")}}">Agregar publicacion</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
