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
            <form method="POST" action="{{route('productos.create')}}" class="card">
                @csrf
                <div>
                    <label for="nombre" class="form-label">Nombre Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div>
                    <label for="precio" class="form-label">Precio</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" id="precio" name="precio" required>

                    </div>

                </div>
                <div>
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" class="form-control" id="peso" name="peso" required>
                </div>
                <div class="form-group">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select name="select" id="select" class="form-control" required>
                        <option value="">Seleccione una categoria</option>
                        @foreach($consulta_cat as $cat)
                        <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
                <div style="align-content: center;">
                    <input type="submit" class="btn btn-dark" value="Agregar producto" style="color:white;">
                </div>

            </form>
        </div>

    </div>



</div>
@endsection
<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
@section('scripts')
<script>
    $(function(){
        $('#select').on('change',onSelectCategoria);
    });

    function onSelectCategoria(){

        var categoria_id=$(this).val();
        $.get('/api/categorias/'+categoria_id,function(data) {

           var html_input= '<input type="text" value="'+data.referencia+'" >';
           $('div#referencia').html(html_input);
        }
        );

    }
</script>
@endsection -->