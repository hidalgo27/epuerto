<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TPaquete;
use Illuminate\Http\Request;
use App\Models\THotel;
use App\Models\TpaqueteItinerario;
use App\Models\TItinerario;
use App\Models\TDestino;

class HomeController extends Controller
{
    public function index(){
        $paquetes = TPaquete::latest()->take(3)->get();
        $destinos = TDestino::latest()->take(3)->get();
        return view('page.home',compact('paquetes','destinos'));
    }
    public function paquetes(){
        $paquetes=TPaquete::paginate(5);
        return view('page.tours',compact('paquetes'));
    }
    public function paquete($url){
        $paquetes=TPaquete::all();
        $paquete=TPaquete::where('url',$url)->get()->first();
        $itinerario=TpaqueteItinerario::where('idpaqueteS',$paquete->id)->get();
        return view('page.toursDetail',compact('paquete','paquetes','itinerario'));
    }
    public function faq(){
        $paquetes = TPaquete::latest()->take(4)->get();
        return view('page.faq',compact('paquetes'));
    }
    public function informacion(){
        $destinos=TDestino::all();
        $paquetes=TPaquete::all();
        return view('page.informacion',compact('destinos','paquetes'));
    }
    public function hoteles(){
        $hoteles = THotel::all();
        $paquetes=TPaquete::all();
        return view('page.hoteles', compact('hoteles','paquetes'));
    }
    public function contacto(){
        $paquetes=TPaquete::all();
        return view('page.contacto',compact('paquetes'));
    }
    public function noticias(){
        return view('page.noticias');
    }
    public function nosotros(){
        $paquetes=TPaquete::all();
        return view('page.nosotros',compact('paquetes'));
    }
}
