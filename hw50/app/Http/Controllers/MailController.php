<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function send(Request $request){

        Mail::to(['address' => $request->email])->send(new Subscribe($request));
         
        return redirect('subscribe')->with(['message' => 'email was sent succesfully']);
    }
}
