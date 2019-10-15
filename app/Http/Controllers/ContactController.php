<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;
use App\Message;

use Mail;

class ContactController extends Controller
{
    //

    public function create(){
    	return  view('contact');
    }



    public function store(ContactRequest $request)
    {

    	$message = new Message;

    	$message->sujet = $request->sujet;
		$message->email = $request->email;
    	$message->description = $request->description;
    	$message->save();

    	Mail::send('email.message',[
    		'msg' => $request->description
    	], function ($mail) use($request){
    		$mail->from($request->email);
    		$mail->to('amine.aqil2009@gmail.com')->subject($request->sujet);
    	});

    	return redirect()->back()->with('flash_message', 'Votre message a bien été envoyé');

    }
}
