<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\MailSend;
//use Mail;

class AppController extends Controller
{
    public function home(){
        return view('interface.page.welcome');
    }

//    public function mail(MailSend $request)
//    {
//        $data = $request->all();
//
//        Mail::send('emails.welcome', ['data'=>$data], function ($message) use ($data) {
//
//            $mail_admin = env('MAIL_USERNAME');
//
//            $message->from($data['email'], $data['name'],  $data['phone'], $data['message'] );
//            $message->to($mail_admin)->subject('Question');
//
//        });
//
//        return redirect()->action('WelcomeController@index')->with('status', 'ДЯКУЄМО! Ваше повiдомлення надiслано !');
//
//
//    }
}
