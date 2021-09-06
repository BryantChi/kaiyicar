<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    //
    function contactMail(Request $request)
    {

        $title = '聯絡我們內容信件';
        $details = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'type' => $request->input('type'),
            'like' => $request->input('like'),
            'clientMail' => $request->input('clientMail')
        ];

        if ($details['clientMail'] == 'true') {
            $contactmail = Mail::to("kaiyicar@gmail.com")->cc($details['email'])->send(new ContactMail($title, $details));
        } else {
            $contactmail = Mail::to("kaiyicar@gmail.com")->send(new ContactMail($title, $details));
        }

        if (empty($contactmail)) {
            // return response()->json(['message' => 'Mail Sent Sucssfully'], 200);
            return json_encode(array('status' => "success"));
        }else{
            // return response()->json(['message' => 'Mail Sent fail'], 400);
            return json_encode(array('status' => "fail"));
        }

        /**
         * 聯絡人：楊俊宏
         * 聯絡電話：0918247627
         * Email：steven.yang@auspicestar.com
         * 聯絡內容：我想知道這台車的報價
         */
    }
}
