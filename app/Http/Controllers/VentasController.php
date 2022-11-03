<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function view()
    {
        $consulta_productos = Producto::all();
        return view('ventas.index')->with('consulta_productos', $consulta_productos);
    }

    public function index($id)
    {
        $consulta_pro = DB::select('SELECT * FROM productos WHERE id = ' . $id);
        //hacer inner join a Categorias
        return view('ventas.create')->with('consulta_pro', $consulta_pro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crearVenta(Request $request)
    {

        Venta::create([
            'producto_id' => $request->input('producto_id'),
            'categoria_id' => $request->input('categoria_id'),
            'cantidad' => $request->input('cantidad'),
        ]);

        $id_producto = $request->input('producto_id');
        $cantidad_inicial = $request->input('cantidad');


        $producto = DB::select('SELECT * FROM productos WHERE id = ' . $id_producto);
        foreach ($producto as $p) {
            $stock = $p->stock;
        }

        if ($stock <= 0) {
            return redirect()->route('ventas.view')->with('jsAlert', 'No se puede realizar la venta');
           
        } 
        elseif($stock < $cantidad_inicial) {

            return redirect()->route('ventas.view')->with('jsAlert', 'No se puede realizar la venta por falta de recursos');
        }
        elseif ($stock == $cantidad_inicial) {
            return redirect()->route('ventas.view')->with('jsAlert', 'No se puede realizar la venta ya que el producto se quedaria sin existencias');
        }
        else {
            $stock_final = $stock - $cantidad_inicial;

            Producto::where('id', '=', $id_producto)->update(array('stock' => $stock_final));
            return redirect()->route('ventas.view')->with('jsAlert', 'Se ha realizado la compra exitosamente');
        }


        return redirect()->route('ventas.view');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
