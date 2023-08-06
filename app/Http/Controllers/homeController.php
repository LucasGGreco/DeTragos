<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Ingrediente;
use App\Models\Tragos;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){

        $tragos = DB::table('tragos as T')
        ->select('T.id','T.nombre' , 'T.img' , 'M.metodo' , 'C.vaso')
        ->leftJoin('metodo as M' , 'T.metodo_id' , '=' , 'M.id')
        ->leftJoin('cristaleria as C' , 'T.cristaleria_id' , '=' , 'C.id')
        ->get();

        return view('home', ['tragos' => $tragos]);
    }
    public function ver_tragos(){
        $tragos = Tragos::all();
        return redirect('welcome')->compact('tragos');
    }
    public function admin(){
        return view('admin/admin');
    }

    
}
