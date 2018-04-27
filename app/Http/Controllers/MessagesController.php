<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
    $validate = Validator::make($request->all(), [
        'name'=>'required',
        'email'=>'required|email'
    ])->validate();

    // $errors = $validate->errors();

    }
}
