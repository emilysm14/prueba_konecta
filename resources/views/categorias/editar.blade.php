@extends('layouts.app')
@section('content')
<style>
    .card {
        margin-top: 60px;
        padding: 40px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>
<div>
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-sm-5 ">
                <form method="POST" class="card">
                    @csrf
                    @foreach($consulta_cat as $cat)
                    @endforeach
                    <div>
                        <label for="nombre" class="form-label">Categoria</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$cat->nombre}}">
                    </div>
                    <div>
                        <label for="referencia" class="form-label">Referencia de Categoria</label>
                        <input type="text"  class="form-control" id="referencia" name="referencia" value="{{$cat->referencia}}">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-dark" value=" Editar Categoria" style="margin-top: 15px;color:white;">
                    </div>

                </form>
            </div>
        </div>
    </div>
    @endsection