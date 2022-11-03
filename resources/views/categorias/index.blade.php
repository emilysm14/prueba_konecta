@extends('layouts.app')
@section('content')



<div class="container">

    <table class="table table-striped" style="margin-top: 25px;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Referencia</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($consulta_categorias as $cat)
            @if($cat != null)
            <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->nombre}}</td>
                <td>{{$cat->referencia}}</td>
                <td>
                    <a href="{{url('/categorias/editar/'.$cat->id)}}"><img src="/images/editar.png" width="30px" alt="Editar Categoria"></a>
                    <a href="{{url('/categorias/eliminar/'.$cat->id)}}"><img src="/images/eliminar.png" width="30px" alt="Eliminar Categoria"></a>

                </td>
            </tr>
            @elseif($cat == null)
            <div>
                <h2>No hay categorias creadas.</h2>
            </div>
            @endif
            @endforeach
        </tbody>
    </table>
    <a href="{{route('categorias.index')}}" class="btn btn-dark" style="color:white;">

        Crear Categoria
    </a>
</div>


@endsection