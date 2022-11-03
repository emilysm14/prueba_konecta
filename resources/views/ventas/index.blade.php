
@extends('layouts.app')
@section('content')
<div class="container" >
<h2 class="text-center">Realizar Ventas</h2>
    <table class="table table-striped" style="margin-top: 25px;">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Referencia</th>
            <th scope="col">Precio</th>
            <th scope="col">Peso</th>
            <th scope="col">Categoria</th>
            <th scope="col">Stock</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($consulta_productos as $pro)
        <tr>
            <th scope="row">{{$pro->id}}</th>
            <td>{{$pro->nombre}}</td>
            <td>{{$pro->referencia}}</td>
            <td>{{$pro->precio}}</td>
            <td>{{$pro->peso}}</td>
            <td>{{$pro->categoria_id}}</td>
            <td>{{$pro->stock}}</td>
            <td>
                <a href="{{url('/ventas/'.$pro->id)}}"><img src="/images/vender.png" width="30px" alt="Vender Producto"></a>


            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
@section('scripts')
<script>
    var msg = '{{Session::get('jsAlert')}}';
    var exist = '{{Session::has('jsAlert')}}';
    if(exist){
      alert(msg);
    }
</script>
