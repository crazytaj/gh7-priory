<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Http\Request;
use App\Email;
use App\Post;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send($id)
    {
        $post = Post::find($id);
        $emailbody = $post->body;
        $emailhead = $post->title;
        $emails = Email::where('catigory', $post->catigory)->get();
        $email_list = [];
        foreach ($emails as $email) {
            array_push($email_list, $email);
        }
        $objDemo = new \stdClass();
        $objDemo->demo_one = $emailhead;
        $objDemo->demo_two = $emailbody;
        $objDemo->sender = $post->name;
        $objDemo->receiver = 'Immigration Service Helpers';
 
        Mail::to($email_list)->send(new DemoEmail($objDemo));
        return redirect('/posts')->with('success', 'Question successfully asked!');
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