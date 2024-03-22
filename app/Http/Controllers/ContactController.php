<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts(){
        return view('contatti', ['title' => 'Contatti']);
    }


    public function invia(Request $request){

        if($request->email == '' || $request->message == ''){
            return redirect()->back()->with(['error' => 'I campi sono obbligatori.']);
        }

        // preview della mail
        return (new \App\Mail\Contatti($request->email, $request->message))->render();
        
        //questo elabora i dati
        \Illuminate\Support\Facades\Mail::to('admin@example.com')
            ->invia(new \App\Mail\Contatti($request->email, $request->message));


        return redirect()->back()->with(['success' => 'Messaggio inviato correttamente!']);

    }
}
