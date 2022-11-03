@extends('layouts.app')
@section('content')
<style>
    .btn {

        margin: 15px;
    }

    .box {

        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }

    .card {

        padding: 40px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5 ">
            <form method="POST" action="{{route('ventas.create')}}" class="card">
                @csrf
                @foreach($consulta_pro as $pro)
                @endforeach

                <div>
                    <label for="producto_id" class="form-label">Id Producto</label>
                    <input type="text" class="form-control"   id="producto_id" name="producto_id" value="{{$pro->id}}" readonly>
                </div>
                <input type="hidden" class="producto_id" name="producto_id" id="producto_id" value="{{$pro->id}}">
                <div>
                    <label for="nombre" class="form-label">Nombre Producto</label>
                    <input type="text" class="form-control"  id="nombre" name="nombre" value="{{$pro->nombre}}" readonly>
                </div>
                <div>
                    <!-- tiene que ir el nombre de la categoria ,no el id -->
                    <!-- <input type="hidden" class="categoria_id" name="categoria_id" id="categoria_id" value="{{$pro->categoria_id}}"> -->
                    <label for="categoria_id" class="form-label">Categoria</label>
                    <input type="text"  class="form-control"  name="categoria_id" id="categoria_id" value="{{$pro->categoria_id}}" readonly>
                </div>
                <div>
                    <label for="cantidad" class="form-label">Cantidad a vender</label>
                    <input type="number" class="form-control"  id="cantidad" name="cantidad" required>
                </div>
                <div>
                    <input type="submit" class="btn btn-dark" value="Realizar Venta" style="color:white;">
                </div>
            </form>
        </div>

    </div>



</div>
@endsection