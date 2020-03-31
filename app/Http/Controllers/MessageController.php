<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store() {

        $message = request()->validate([

            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        mail::to('pipe777@gmail.com')->queue(new MensajeRecibido($message));

        return back()->with('status', 'Recibimos tu mensaje, te responderemos en menos de 24 hrs.');
    }
}
