<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;

class ContactController extends Controller
{
    public function goToContact(){
        return view ('contact.contatti'); 
    }

    public function contactSubmit(Request $request){

        $name = $request->input('nome');
        $surname = $request->input('cognome');
        $email = $request->input('email');
        $about = $request->argomento;

        Mail::to('admin@email1234.it')->send(new AdminMail($name, $surname, $email, $about));
        
        Mail::to($email)->send(new ContactMail());
        return redirect(route('homepage'))->with('emailSent','Email correttamente inviata!');

    }
}
