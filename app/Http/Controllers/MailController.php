<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send(Request $request)
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = $request->title;
        $objDemo->demo_two = $request->body;
        $objDemo->demo_three = $request->name;
        $objDemo->receiver = 'Immigration Service Helpers';
 
        Mail::to($request->email)->send(new DemoEmail($objDemo));
    }
}