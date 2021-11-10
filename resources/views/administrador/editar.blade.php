<h1>ACTUALIZAR</h1>
<form method="post" action="/administrador/{{$administrador->id}}">
    @csrf
    <input type="text" name="nomusu" value="{{$administrador->nom_usu}}"><br>
    <input type="text" name="pass" value="{{$administrador->contraseña}}"><br>
    <input type="submit" value="Actualizar">
    @method("PUT")
</form>
<?php
