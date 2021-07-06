<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TPaquete;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $paquete = TPaquete::with('paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')->get();
        dd($paquete);
        return view('page.home');
    }
}
