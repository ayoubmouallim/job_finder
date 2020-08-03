<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\contactMail;
use App\Http\Requests\contactRequest;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    

    public function create(){
        return view('jobFinder.contact');
    }

    public function store(contactRequest $request){
        
        // send email

        Mail::to('ayoubmouallim@gmail.com')->send(new contactMail($request));

        return redirect()->back()->with([ 'msg' => 'message sent successfully' ]);
    }
}
