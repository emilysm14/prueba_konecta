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
        margin-top: 50px;
        padding: 40px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5 ">

            <form method="POST" action="{{route('categorias.create')}}" class="card">
                @csrf
                <div>
                    <label for="nombre" class="form-label">Nombre Categorias</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div>
                    <label for="referencia" class="form-label">Referencia de Categoria</label>
                    <input type="text" class="form-control" id="referencia" name="referencia" required>
                </div>
                <div>
                    <input type="submit" class="btn btn-dark" value="Crear Categoria" style="color:white;">
                </div>

            </form>
        </div>

    </div>



</div>
@endsection