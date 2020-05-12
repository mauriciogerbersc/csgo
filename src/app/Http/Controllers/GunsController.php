<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Gun;
use App\Jogos;
use App\CategoriaArma;

class GunsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guns = Gun::all();
        return view('admin.guns.index', compact('guns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jogos = Jogos::all();
        $categorias = CategoriaArma::all();
        return view('admin.guns.create', compact('jogos', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('gun_image')){
            $imagem = $request->file('gun_image');

            $name                     = $imagem->getClientOriginalName();
            $name_sem_extensao        = pathinfo($name, PATHINFO_FILENAME);
            $extension                = $imagem->getClientOriginalExtension();
            $fileNameToStore          = uniqid().'_'.time().'.'.$extension;
            $imagem->move(public_path().'/files/', $fileNameToStore);
        }


        DB::beginTransaction();
        $gun = Gun::create([
            'name' => $request->name,
            'ammo' => $request->ammo,
            'gun_image' => $fileNameToStore,
            'award'   => $request->award,
            'damage' => $request->damage,
            'firerate' => $request->firerate,
            'recoil_control' => $request->recoil_control,
            'accurate_range' => $request->accurate_range,
            'armor_penetration' => $request->armor_penetration,
            'categoria_id' => $request->categoria_id,
            'jogo_id' => $request->jogo_id
        ]);
        DB::commit();

        $request->session()->flash('mensagem', "Arma <strong>{$gun->name}</strong> cadastrada com sucesso.");
        $request->session()->flash('alert_tipo', "alert-success");

        return redirect()->route('listar_armas');
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
        $jogos = Jogos::all();
        $categorias = CategoriaArma::all();
        $gun = Gun::find($id);
        return view('admin.guns.edit', compact('gun','jogos','categorias'));
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
        if($request->hasFile('gun_image')){
            $imagem = $request->file('gun_image');

            $name                     = $imagem->getClientOriginalName();
            $name_sem_extensao        = pathinfo($name, PATHINFO_FILENAME);
            $extension                = $imagem->getClientOriginalExtension();
            $fileNameToStore          = uniqid().'_'.time().'.'.$extension;
            $imagem->move(public_path().'/files/', $fileNameToStore);

            $imagem_final = $fileNameToStore;
        }else{
            $imagem_final = $request->old_image;
        }


        DB::beginTransaction();
            $gun = Gun::find($id);
            $gun->name = $request->input('name');
            $gun->ammo = $request->input('ammo');
            $gun->gun_image = $imagem_final;
            $gun->award = $request->input('award');
            $gun->damage = $request->input('damage');
            $gun->firerate = $request->input('firerate');
            $gun->recoil_control = $request->input('recoil_control');
            $gun->accurate_range = $request->input('accurate_range');
            $gun->armor_penetration = $request->input('armor_penetration');
            $gun->categoria_id = $request->input('categoria_id');
            $gun->jogo_id = $request->input('jogo_id');
            $gun->save();
        DB::commit();


        $request->session()->flash('mensagem', "Arma <strong>{$gun->name}</strong> editadoa com sucesso.");
        $request->session()->flash('alert_tipo', "alert-success");

        return redirect()->route('listar_armas');
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
