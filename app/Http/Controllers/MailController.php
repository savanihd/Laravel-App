<?php

namespace App\Http\Controllers;
    
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from ItSolutionStuff.com',
            'body' => 'This is for testing email using smtp.'
        ];
           
        Mail::to('aatmaninfotech@gmail.com')->send(new DemoMail($mailData));
             
        dd("Email is sent successfully.");
    }
}
