<?php

namespace App\Http\Controllers\Admin;

use App\Mail\UserInviteMail;
use App\Model\SentMail;
use App\Services\Admin\MailServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MailController extends Controller
{
    public $mail;
    public function __construct(MailServices $mail)
    {
        $this->mail = $mail;
    }

    public function create($email)
    {
        $this->email = $email;
        return view('admin.organization.mail')->with('data',$this->email);
    }
    public function store(Request $request)
    {
        try{
             $this->mail->organizationUserMail($request);
            return back()->with('success','mail sent to the created user successfully');
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
}
