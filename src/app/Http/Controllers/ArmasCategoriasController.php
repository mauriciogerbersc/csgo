<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaArma;
use App\Jogos;
use Illuminate\Support\Facades\DB;

class ArmasCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriaArma::all();
        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jogos = Jogos::all();
        return view('admin.categorias.create', compact('jogos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $categoria = CategoriaArma::create([
            'jogo_id'   => $request->jogo_id,
            'categoria' => $request->categoria
        ]);
        DB::commit();

        $request->session()->flash('mensagem', "Categoria <strong>{$categoria->categoria}</strong> cadastrado com sucesso.");
        $request->session()->flash('alert_tipo', "alert-success");

        return redirect()->route('listar_categorias');
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
