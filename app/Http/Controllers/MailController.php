<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Http\Request;
use App\Email;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = $requests->title;
        $objDemo->demo_two = $requests->body;
        $objDemo->demo_three = $requests->name;
        $objDemo->receiver = 'Immigration Service Helpers';
 
        Mail::to($requests->email)->send(new DemoEmail($objDemo));
    }
    public function store(Request $request)
    {
        $post = new Email;
        $post->catigory = $request->input('topic');
        $post->email = $request->input('email');
        $post->link = $request->input('link');
        $post->save();
        return redirect('/')->with('success', 'Email successfully added');

    }

    public function create()
    {
        return view('mails.add');
    }
}