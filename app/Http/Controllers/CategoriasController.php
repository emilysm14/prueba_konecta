<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function byCategoria($id){

        Categoria::where('id',$id)->get();
    }
    public function view()
    {

        $consulta_categorias =Categoria::all();
        return view('categorias.index')->with('consulta_categorias',$consulta_categorias);
    }
    public function index()
    {
        return view('categorias.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Categoria::create([
            'nombre' => $request->input('nombre'),
            'referencia' => $request->input('referencia'),
        ]);
        return redirect()->route('categorias.view');
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
        $consulta_cat = DB::select('SELECT * FROM categorias WHERE id = ' . $id);

        return view('categorias.editar')->with('consulta_cat', $consulta_cat);
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
        $referencia = $request->input('referencia');

        Categoria::where('id', '=', $id)->update(array('nombre' => $nombre, 'referencia' => $referencia));

        return redirect()->route('categorias.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::where('id', '=', $id)->delete();
        return redirect()->route('categorias.view');

    }
}
