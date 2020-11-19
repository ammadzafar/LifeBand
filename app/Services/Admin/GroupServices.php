<?php


namespace App\Services\Admin;


use App\Model\Group;
use App\Model\UserAccount;

class GroupServices
{
    public function store($request)
    {
        $group = new Group();
        $group->account_id = $request->account_id;
        $group->name = $request->name;

        if ($request->hasFile('image'))
        {
            $filename =$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/group',$filename);
        }
        $group->image = $filename;
        $group->save();
//        dd($request->has('user_id'));
        if ($request->has('user_id'))
        {
            $user_id = $request->user_id;
            $array_length = count($user_id);
            $data = Group::where('account_id',$request->account_id)->first();
//            dd($data->id);
            for ($i=0; $i<$array_length; $i++)
            {
                UserAccount::where('id',$user_id[$i])->update(['group_id'=>$data->id]);
            }
        }
    }
}
