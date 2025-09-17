<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CotizacionMail;
use Illuminate\Support\Facades\Mail;

class CotizacionController extends Controller
{
    public function send(Request $request)
    {
        // Validar datos del formulario
        $data = $request->validate([
            'nombre'   => 'required|string|max:255',
            'correo'   => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'tipo'     => 'required|string|max:100',
            'empresa'  => 'nullable|string|max:255',
            'mensaje'  => 'nullable|string|max:1000',
        ]);

        // Enviar correo al usuario
        Mail::to($data['correo'])->send(new CotizacionMail($data));

        return response()->json([
            'message' => '✅ Cotización enviada con éxito',
        ], 200);
    }
}
