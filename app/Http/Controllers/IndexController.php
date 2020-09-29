<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gun;
use App\CategoriaArma;
class IndexController extends Controller
{


    function str_allowed($str, $arr) {
        foreach ($arr as $bad_string) {
            if(strpos($str, $bad_string) !== false)
                return false; // bad string detected, return false
        }
        return true; // if we got this far means everything's good return true
    }

    function group_by($key, $data) {
        $result = array();
    
        foreach($data as $val) {
            if(array_key_exists($key, $val)){
                $result[$val[$key]][] = $val;
            }else{
                $result[""][] = $val;
            }
        }
    
        return $result;
    }


    public function readJSON(Request $request){
      
        $path = storage_path() . "/guns.json"; // ie: /var/www/laravel/app/storage/json/filename.json

        $json = json_decode(file_get_contents($path), true);
       // echo "<pre> , 'MAC-10', 'SSG 08', 'M4A1-S'";
        
        /*$todasAsArmas = Gun::all();

        $armasPermitidas = array();
        foreach($todasAsArmas as $key=>$val){
            $armasPermitidas[] = $val['name'];
        }
        */
        $armasPermitidas = array($request->gun);
        
        $array = array();
        foreach($json['data'] as $key=>$val){
            if(strpos($val['market_hash_name'], "|") !== false)
            {
                $divide_string = explode("|", $val['market_hash_name']);
                $gun = $divide_string[0];
                $skin = $divide_string[1];
                if(!$this->str_allowed($gun, $armasPermitidas)){
                    $skinOut = explode(" ",trim($skin));
                    $array[] = array(
                        'gun' => trim($gun), 
                        'skin' => trim($skinOut[0]),
                        'imagem' => $val['image'], 
                        'border_color' => $val['border_color'],
                        'price_min' => $val['prices']['min'],
                        'price_max' => $val['prices']['max']
                    );
                }
                    
            } 
        }   
  
       // echo "<pre>";

        $novoArray = $this->group_by('gun', $array);
     
        $arrayDeArmas = array();
        foreach($novoArray as $key=>$guns){
            foreach($guns as $gun){
                $arrayDeArmas[$key][$gun['skin']] = array(
                    'border_color' => $gun['border_color'], 
                    'imagem' => $gun['imagem'], 
                    'price_min' => $gun['price_min'], 
                    'price_max' => $gun['price_max']
                );
            }
        }
        
        $type = $request->type;
        $gun = $request->gun;
        //print_r($arrayDeArmas);
        //exit;
        return view('skins', compact('arrayDeArmas', 'gun', 'type'));
  
    }   
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
        ->where('name', 'like', '%' .$search . '%')->get();
       
        $total_row = $guns->count();
       
        if($total_row > 0 && $search != ''){
        foreach ($guns as $key=>$gun) {
            $output =
            '<thead>
                <tr style="background-color: #d5057f !important;color: #fff;">
                    <th><img src="files/'.$gun->gun_image.'" class="img" alt="'.$gun->categoria->categoria . ' - CSGO - ' . $gun->name .'" title="'.$gun->categoria->categoria . ' - CSGO - ' . $gun->name .'" >Attribute</th>
                    <th>Attribute Info</th>
                </tr>
            </thead>
            <tbody class="conteudo">
            <tr>
                <td>Name:</td>
                <td class='.$gun->id.'><a href="/skins/'.$gun->name.'/'.$gun->categoria->categoria.'" target="_blank" class="btn">'.$gun->name.'</a></td>
            </tr>
            <tr>
            <td>Price:</td>
                <td>$ '.$gun->gun_price.'</td>
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

    
    public function weapon(Request $request){
        $type = $request->gun;

        $order_by = "guns.name";

        if($request->query('price')){
           $price = $request->query('price');

           $order_by = "gun_price $price";
        }

        if($request->query('award')){
            $award = $request->query('award');
 
            $order_by = "award $award";
         }

        if($request->query('damage')){
            $damage = $request->query('damage');
 
            $order_by = "damage $damage";
        }

        if($request->query('firerate')){
            $firerate = $request->query('firerate');
 
            $order_by = "firerate $firerate";
        }

        if($request->query('accurate')){
            $accurate_range = $request->query('accurate');
 
            $order_by = "accurate_range $accurate_range";
        }

        if($request->query('armor')){
            $armor_penetration = $request->query('armor');
 
            $order_by = "armor_penetration $armor_penetration";
        }

        $weapons = CategoriaArma::where('categoria', 'LIKE', $request->gun)
                                ->join('guns', 'categoria_id', '=', 'categoria_armas.id')
                                ->orderByRaw($order_by)
                                ->get();
                               
        return view('guns.gun',compact('weapons','type'));
    }
   
}
