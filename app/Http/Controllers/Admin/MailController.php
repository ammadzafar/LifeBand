<?php

namespace App\Http\Controllers\Admin;

use App\Mail\UserInviteMail;
use App\Model\SentMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public function store(Request $request)
    {
        try {
            $mail = new SentMail();
            $mail->email = $request->email;
            $mail->save();
            Mail::to($mail->email)->send(new UserInviteMail());
            return back()->with('success','mail sent to the created user successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
}
