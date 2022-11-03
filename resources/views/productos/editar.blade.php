@extends('layouts.app')
@section('content')
<style>
    .card{

        padding: 40px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>

<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-sm-5 ">
            <form method="POST" class="card">
                @csrf
                @foreach($consulta_pro as $pro)
                @endforeach
                <div>
                    <label for="nombre" class="form-label">Nombre Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$pro->nombre}}" >
                </div>
                
                <div>
                    <label for="precio" class="form-label">Precio</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control"  id="precio" name="precio"value="{{$pro->precio}}"  >

                    </div>

                </div>
                <div>
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" class="form-control"  id="peso" name="peso" value="{{$pro->peso}}" >
                </div>
                <div>
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="{{$pro->categoria_id}}" readonly>
                </div>
                <div>
                    <label for="referencia" class="form-label">Referencia</label>
                    <input type="text" class="form-control"  id="referencia" name="referencia" value="{{$pro->referencia}}" readonly>
                </div>
                <div>
                    <label for="stock" class="form-label">stock</label>
                    <input type="number"  class="form-control" id="stock" name="stock"  value="{{$pro->stock}}">
                </div>
                <div>
                    <input type="submit" class="btn btn-dark" value="Editar producto" style="margin: 20px;color:white;">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection