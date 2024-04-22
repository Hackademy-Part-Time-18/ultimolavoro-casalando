<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;

class PublicController extends Controller
{
    public function homepage () {
        return view('homepage');
    }

    public function contact () {
        return view('contact');
    }

    public function send (ContactFormRequest $request) {
        dd($request->all());
    }
}
