<h1>ACTUALIZAR</h1>
<form method="post" action="/curso/{{$usuario->id}}">
    @csrf
    <input type="text" name="nombre" value="{{$usuario->name}}"><br>
    <input type="text" name="correo" value="{{$usuario->email}}"><br>
    <input type="text" name="contra" value="{{$usuario->password}}"><br>
    <input type="date" name="crea" value="{{$usuario->created_at}}"><br>
    <input type="date" name="actu" value="{{$usuario->update_at}}"><br>
    <input type="submit" value="Actualizar">
    @method("PUT")
</form>
<?php


