<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
   

    public function casalando () {
        return view('casalando');
    }
    public function home () {
        return view('home');
    }
    public function contact () {
        return view('contact');
    }

    public function send(ContactFormRequest $request) 
    {
        $data = [
            'name' => $request->input('name', 'Utente Anonimo'),
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('cambiasso.s@hotmail.it')->send(new ContactMail($data));
        return redirect()->route('casalando')->with('email_send', 'Grazie per aver inviato l\'email');
    }
}
