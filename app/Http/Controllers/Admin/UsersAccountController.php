<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\InviteUsersRequest;
use App\Model\SentMail;
use App\Services\Admin\UserAccountServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersAccountController extends Controller
{
    public $user;
    public function __construct(UserAccountServices $user)
    {
        $this->user = $user;
    }

    public function create($email)
    {
        $this->email = SentMail::where('email',$email)->first();
        return view('admin.organization.email',compact(''))->with('data',$this->email);
    }
    public function store(InviteUsersRequest $request)
    {
        try {
             $this->user->userStore($request);
            return redirect()->back()->with('success','Your Account has been successfully created');
        }catch (\Exception $e) {
            return redirect()->back()->with('error',error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
}
