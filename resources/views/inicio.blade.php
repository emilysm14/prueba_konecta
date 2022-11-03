@extends('layouts.app')
@section('content')
<style>
    .box {

        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
    }

    .card {
        margin: 25px;
        border-radius: 15px;
    }

    .img1 {
        background-image: url('/images/fondo1.jpg');
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 15px;
    }

    .img2 {
        background-image: url('/images/fondo2.jpg');
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 15px;
    }

    .img3 {
        background-image: url('/images/fondo3.jpg');
        object-fit: cover;
        width: 100%;
        height: 100%;
        border-radius: 15px;
    }
    .bg-piel{
        background-color: #fffaf7;
    }
</style>
<div class="justify-content-center">
    <div class="cards-row row justify-content-center">

        <div class="col-sm-4 ">
            <div class="card box" style="margin-top: 25%;">

                <div class="card-body img3">
                    <h2 style="color: white;text-align:center;">Productos</h2>
                    <a href="{{ route('productos.view') }}" class="btn btn-light ">Ver productos</a>
                </div>
            </div>
        </div>


        <div class="col-sm-4">
            <div class="card box" style="margin-top: 25%;">

                <div class="card-body img2">
                    <h2 style="color: white;text-align:center;">Categorias</h2>
                    <a href="{{ route('categorias.view') }}" class="btn btn-light">Ver categorias</a>
                </div>
            </div>
        </div>

    </div>
    <div class="cards-row row justify-content-center">
        <div class="col-sm-4">
            <div class="card box">

                <div class="card-body img1">
                    <h2 style="color: white;text-align:center;">Ventas</h2>
                    <a href="{{ route('ventas.view') }}" class="btn btn-light">Ver ventas</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="py-5 bg-piel" style="margin-top: 13%;">
    <div class="container px-5">
        <p class="m-0 text-center text-darsk">Prueba técnica de ingreso equipo Konecta. Desarrollado por Emily Suarez.</p>
    </div>
</footer>
@endsection