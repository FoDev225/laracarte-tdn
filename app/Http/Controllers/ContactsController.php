<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\MessageCrated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
    	$message = Message::create($request->only('name', 'email', 'message'));

    	// $message->name = $request->name;
    	// $message->email = $request->email;
    	// $message->message = $request->message;
    	// $message->save();

    	// $mailable = new MessageCrated($message);

    	Mail::to(config('laracarte.admin_support_email'))->queue(new MessageCrated($message));

    	flashy('Nous vous répondrons dans les plus brefs délais !');

    	return redirect()->route('home_path');
    }
}
