<h1>{{$titulo}}</h1>

<form method="POST" action="clientes" >
    @csrf
    <label for="">Razon social</label><input type="text" name="razon_social"><br>
    <label for="">CUIT</label><input type="text" name="cuit"><br>
    <button type="submit">Agregar</button>
</form>