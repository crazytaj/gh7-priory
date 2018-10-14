<?php 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Http\Request;
use App\Email;
use Illuminate\Support\Facades\Mail;
$credit = Email::where('catigory', 'credit')->get();
foreach ($credit as $cred) {
    echo $cred->email;
}
