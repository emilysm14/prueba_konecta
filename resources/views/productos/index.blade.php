@extends('layouts.app')
@section('content')


<div class="container" >

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
                    <a href="{{url('/productos/editar/'.$pro->id)}}"><img src="/images/editar.png" width="30px" alt="Editar Producto"></a>
                    <a href="{{url('/productos/eliminar/'.$pro->id)}}"><img src="/images/eliminar.png" width="30px" alt="Eliminar Porducto"></a>



                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('productos.index')}}" class="btn btn-dark" style="margin-top: 15px;color:white;">

        Crear Producto
    </a>
</div>
@endsection

