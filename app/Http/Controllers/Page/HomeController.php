<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TPaquete;
use Illuminate\Http\Request;
use App\Models\THotel;
use App\Models\TpaqueteItinerario;
use App\Models\TItinerario;
use App\Models\TDestino;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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
    public function contact_form(Request $request){
        $from = 'percy@epuerto.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $celular = $request->tCelular;
        $mensaje=$request->tMensaje;
        $url3=$this->getUrl();
        try {
            Mail::send(['html' => 'email.emailClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('EPUERTO')
                    ->from('percy@epuerto.com', 'EPUERTO');
            });
            Mail::send(['html' => 'email.emailContacto'], [
                'nombre' => $nombre,
                'email' => $email,
                'celular' => $celular,
                'url' =>$url3,
                'mensaje' => $mensaje,],
                function ($messaje) use ($from) { $messaje->to($from, 'EPUERTO')
                    ->subject('EPUERTO - Formulario de Contacto')
                    ->from('percy@epuerto.com', 'EPUERTO');
            });
            return Redirect::to(URL::previous() . "#contacto")->with('status', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function contact_form_tour(Request $request){
        $from = 'percy@epuerto.com';
        $nombre = $request->tNombre;
        $email = $request->tEmail;
        $celular = $request->tCelular;
        $mensaje=$request->tMensaje;
        $url3=$this->getUrl();
        try {
            Mail::send(['html' => 'email.emailClient'], ['nombre' => $nombre],
                function ($messaje) use ($email, $nombre) { $messaje->to($email, $nombre)
                    ->subject('EPUERTO')
                    ->from('percy@epuerto.com', 'EPUERTO');
            });
            Mail::send(['html' => 'email.emailContacto'], [
                'nombre' => $nombre,
                'email' => $email,
                'celular' => $celular,
                'url' =>$url3,
                'mensaje' => $mensaje,],
                function ($messaje) use ($from) { $messaje->to($from, 'EPUERTO')
                    ->subject('EPUERTO - Formulario de Contacto TOUR')
                    ->from('percy@epuerto.com', 'EPUERTO');
            });
            return Redirect::to(URL::previous() . "#contacto_tour")->with('status2', 'Registro satisfactorio.');
        }
        catch (Exception $e){
            return $e;
        }
    }
    public function getUrl(){
        $url=url()->previous();
        $url2=explode(env('APP_URL'),$url);
        return $url3=str_replace('-', ' ', $url2[1]);
    }
}
