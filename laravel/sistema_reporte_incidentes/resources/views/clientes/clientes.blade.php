<h1>{{$titulo}}</h1> <!-- $titulo es la key del array la cual pase como parametro, debe ser igual-->
<table>
    <thead>
        <tr>
            <th>Razon social</th>
            <th>CUIT</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($arrayClientes as $cliente)
            <tr>
                <td>{{$cliente->razon_social}}</td> <!--aca se debe usar -> por que es un objeto, la cual el atributo debe ser igual al nombre de cada columna de la tabla que creamos en la DB-->
                <td>{{$cliente->cuit}}</td>
            </tr>
        @endforeach
    </tbody>
</table>



