<?php

namespace App\Http\Controllers;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Bakytov.Yerbol';
        $objDemo->receiver = 'Bakytov.Yerbol';

        Mail::to("190103443@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}
