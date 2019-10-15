<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Message;
use App\Repositories\ContactRepository;
use Mail;

class ContactController extends Controller
{
    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function create(){
    	return  view('contact');
    }



    public function store(ContactRequest $request)
    {
    	$message = $this->contactRepository->store(
            $request->except('_token', 'q')
        );

    	Mail::send('email.message',[
    		'msg' => $message->description
    	], function ($mail) use($message){
    		$mail->from($message->email);
    		$mail->to('amine.aqil2009@gmail.com')->subject($message->sujet);
    	});

    	return redirect()->back()->with('flash_message', 'Votre message a bien été envoyé');

    }
}
