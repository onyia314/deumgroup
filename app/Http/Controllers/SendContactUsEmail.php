<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendContactUsEmail extends Controller
{
    public function send(Request $request){

        $userData = $request->route()->parameters();

        $validator = Validator::make($userData , [
            'name' => 'required|string',
            'email'=> 'required|email',
            'subject' => 'required|string|min:3|max:300',
            'message' => 'required|string|min:3|max:1000'
        ]);


        if($validator->fails()){
            return response(['message' => 'validationError' , 'errors' => $validator->errors()]);
        }

        Mail::to(env('DEUM_EMAIL_ADDRESS'))->send(new ContactUsMail($userData));

        return response(['message' => 'OK']);
    }

}
