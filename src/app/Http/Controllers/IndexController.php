<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gun;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {

        $search = $request->gun;
        $guns = Gun::orderby('name','asc')
        ->select('id','name','ammo','award','damage','firerate','recoil_control','accurate_range','armor_penetration', 'gun_image')
        ->where('name', 'like', '%' .$search . '%')->get();
       
        $total_row = $guns->count();
       
        if($total_row > 0 && $search != ''){
        foreach ($guns as $key=>$gun) {
            $output =
            '<thead>
                <tr style="background-color: #d5057f !important;color: #fff;">
                    <th><img src="files/'.$gun->gun_image.'" class="img">Attribute</th>
                    <th>Attribute Info</th>
                </tr>
            </thead>
            <tbody class="conteudo">
            <tr>
                <td>Name:</td>
                <td class='.$gun->id.'><strong>'.$gun->name.'</strong></td>
            </tr>
            <tr>
                <td>Ammo:</td>
                <td>'.$gun->ammo.'</td>
            </tr>
            <tr>
                <td>Award:</td>
                <td class="awards">'.$gun->award.'</td>
            </tr>
            <tr>
                <td>Damage:</td>
                <td class="damage">'.$gun->damage.'</td>
            </tr>
            <tr>
                <td>Firerate:</td>
                <td class="firerate">'.$gun->firerate.'</td>
            </tr>
            <tr>
                <td>Recoil Control:</td>
                <td class="recoil_control">'.$gun->recoil_control.'</td>
            </tr>
            <tr>
                <td>Accurate Range:</td>
                <td class="accurate_range">'.$gun->accurate_range.'</td>
            </tr>
            <tr>
                <td>Armor Penetration:</td>
                <td class="armor_penetration">'.$gun->armor_penetration.'</td>
            </tr>
            </tbody>';
        }
        }else{
            $output = '';
        }
        $data = array(
            'table_data' => $output
        );
        echo json_encode($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pistols()
    {
        $pistols = Gun::where('categoria_id', '=' , 1)->get();
        return view('guns.pistols', compact('pistols'));
    }


    public function heavy()
    {
        $heavys = Gun::where('categoria_id', '=' , 3)->get();
        return view('guns.heavys', compact('heavys'));
    }


    public function smgs()
    {
        $smgs = Gun::where('categoria_id', '=' , 4)->get();
        return view('guns.smgs', compact('smgs'));
    }

    public function rifles()
    {
        $rifles = Gun::where('categoria_id', '=' , 2)->get();
        return view('guns.rifles', compact('rifles'));
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
