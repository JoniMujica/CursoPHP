
@foreach ($nombres as $nombre) <!--La variable "$nombres" viene de como lo definimos en routes con with, en este caso la variable seria "XX" tal cual como la llamamos, y contiene el valor del 2do parametro de with-->
    <h2>{{$nombre}}</h2>
@endforeach



