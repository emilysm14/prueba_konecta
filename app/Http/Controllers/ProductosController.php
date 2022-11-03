<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $consulta_productos = Producto::all();
        return view('productos.index')->with('consulta_productos', $consulta_productos);
    }

    public function index()
    {
        $consulta_cat = Categoria::all();
        return view('productos.create')->with('consulta_cat', $consulta_cat);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
            $categoria_id = $request->input('select');
            $cons_cat = DB::select('SELECT * FROM categorias WHERE id = ' . $categoria_id);
            foreach($cons_cat as $cat){
               $referencia = $cat->referencia;
            }
         
            Producto::create([
                'nombre' => $request->input('nombre'),
                'referencia' => $referencia,
                'precio' => $request->input('precio'),
                'peso' => $request->input('peso'),
                'categoria_id' => $request->input('select'),
                'stock' => $request->input('stock'),
            ]);
            return redirect()->route('productos.view');
        
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $consulta_pro = DB::select('SELECT * FROM productos WHERE id = ' . $id);
        //hacer inner join a Categorias
        return view('productos.editar')->with('consulta_pro', $consulta_pro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nombre = $request->input('nombre');
        $precio = $request->input('precio');
        $peso = $request->input('peso');
        $categoria_id = $request->input('categoria');
        $referencia = $request->input('referencia');
        $stock = $request->input('stock');

       

        Producto::where('id', '=', $id)->update(array('nombre' => $nombre, 'referencia' => $referencia, 'precio' => $precio, 'peso' => $peso, 'categoria_id' => $categoria_id, 'stock' => $stock,));

        return redirect()->route('productos.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::where('id', '=', $id)->delete();
        return redirect()->route('productos.view');
    }
}
