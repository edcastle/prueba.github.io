<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class StoreController extends Controller
{
    public function index() {
        
        return view('store.home');
    }

    public function contacto() {
        return view('store.contacto');
    }

    public function contactoSendMail(Request $request) {
        $nombres = $request->nombres;
        $apellidos = $request->apellidos;
        $email = $request->email;
        $ciudad = $request->ciudad;
        $mensaje = $request->mensaje;

        Mail::to('edcastle25@gmail.com', 'Correo prueba admin')
            ->send(new ContactoMail($nombres, $apellidos, $email, $ciudad, $mensaje));

        $request->session()->flash('status', 'Email enviado correctamente. Te responderemos lo más pronto posible.');
        return redirect()->route('contacto');
    }

    public function about() {
        return view('store.about');
    }
}
