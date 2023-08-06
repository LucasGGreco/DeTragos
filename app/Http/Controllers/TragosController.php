<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ingrediente;
use App\Models\Tragos;

class TragosController extends Controller
{

    public function busquedaTragos(Request $request){
        
        $input = $_POST['ingrediente'];
        
        $ingredientes = Ingrediente::all();

        return $ingredientes;


        
        // if($ingrediente == $trago->ingrediente){
            
        //     return $trago->ingrediente;
        // }

        // if(!empty($ingrediente)){
        //     $consulta = Ingrediente::where('ingrediente', $ingrediente);
        //     dd($consulta);
        // }
    }

    public function mostrarTrago($id){
        
        $trago = DB::table('tragos as T')
        ->select('T.id','T.nombre' , 'T.img' , 'T.garnish' , 'M.metodo' , 'C.vaso', 'T.descripcion_corta','I.ingrediente','T.ingredientes_id')
        ->leftJoin('metodo as M' , 'T.metodo_id' , '=' , 'M.id')
        ->leftJoin('cristaleria as C' , 'T.cristaleria_id' , '=' , 'C.id')
        ->leftJoin('ingredientes as I' , 'T.ingredientes_id' , '=' , 'I.id')
        ->where('T.id','=',$id)
        ->first();

        $ingredientes = DB::table('ingredientes as I')
        ->get();

        $ingredientes_id_array = json_decode($trago->ingredientes_id, true);

        return view('trago',compact('trago','ingredientes','ingredientes_id_array'));
    }
}
