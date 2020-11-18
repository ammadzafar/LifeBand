<?php


namespace App\Services\Admin;

use App\Model\UserAccount;
use Illuminate\Support\Facades\Hash;

class UserAccountServices
{
    public function userStore ($request)
    {

        $user = new UserAccount();
        $user->account_id = $request->account_id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->address = $request->address;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->emergency_contact_person = $request->emergency_contact_person;
        $user->emergency_person_phone = $request->emergency_person_phone;
//        dd($user);
        $user->save();
    }
}
