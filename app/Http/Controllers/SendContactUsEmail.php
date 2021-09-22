<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendContactUsEmail extends Controller
{
    public function send(Request $request , $name , $email, $subject, $message){

        $userData = $request->route()->parameters();

        $validator = Validator::make($userData , [
            'name' => 'required|string',
            'email'=> 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|min:5'
        ]);

        if($validator->fails()){
            return response()->json([
                'message' => 'failed validation'
            ] , 422);
        }

        //Mail::to(env('DEUM_EMAIL_ADRRESS'))->send(new ContactUsMail($userData));

        return response()->json([
            'message' => 'OK'
        ],201);
    }

    public function dummy(Request $request , $name , $email, $subject, $message){
        $userData = $request->route()->parameters();
        Mail::to(env('DEUM_EMAIL_ADRRESS'))->send(new ContactUsMail($userData));
    }
}
