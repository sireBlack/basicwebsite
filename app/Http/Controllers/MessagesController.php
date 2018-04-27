<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    $validate = Validator::make($request->all(), [
        'name'=>'required',
        'email'=>'required|email'
    ])->validate();

    // Create a success message
    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');

    //save message
    $message->save();

    //Redirect

    return redirect('/contact')->with('success', 'Message Sent');

    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
