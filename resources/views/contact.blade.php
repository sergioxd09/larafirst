@extends('master')

@section('contect')
<h1>contact 1 </h1>
<p>{{$name}}</p>
@if ($name != "Sergio")
    Tu nombre no es Sergio            
@else
    <h2>Tu nombre Es Sergio</h2>
@endif

<ul> <!-- <ul> es una etiqueta que define una lista desordenada. Se usa para agrupar elementos que no tienen un orden específico. !-->
@foreach ([1,  2 , 3 , 4 , 5] as $item)
    <li>{{$item}}</li>
@endforeach
</ul>
    
@endsection