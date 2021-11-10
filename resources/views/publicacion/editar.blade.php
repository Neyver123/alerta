<h1>ACTUALIZAR</h1>
<form method="post" action="/publicacion/{{$publicacion->id}}">
    @csrf
    <input type="text" name="idusu" value="{{$publicacion->id_usuario}}"><br>
    <input type="text" name="inci" value="{{$publicacion->incidente}}"><br>
    <input type="text" name="lugar" value="{{$publicacion->lugar}}"><br>
    <input type="date" name="fech" value="{{$publicacion->fecha}}"><br>
    <input type="submit" value="Actualizar">
    @method("PUT")
</form>
<?php
