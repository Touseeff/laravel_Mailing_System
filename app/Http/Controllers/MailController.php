<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
    public function index(){
        $mailData = [
            "title"=> "HR Department",
            "content"=> "desc",
        ];
        Mail::to("tauseefchoohan3@gmail.com")->send(new DemoMail($mailData));

        dd("Mail send sucess");
    }

}
