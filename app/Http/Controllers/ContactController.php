<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function seed(Request $request){
        $request->validate([
            'name'=>'required',
            'subject'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);

        if($this->isOnline()){
            $mail_data = [
                'recipient' => 'phamc1702@gmail.com',
                'subject' => $request->subject,
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'body' => $request->message
            ];



            \Mail::send('email-template', $mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });

            return redirect()->back()->with('success','Đã gửi');

        }else{
            return redirect()->back()->withInput()->with('error','Kiểm tra kết nối');
        }
    }

    public function isOnline($site = "https://www.youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }else{
            return false;
        }
    }
}
