<?php


namespace App\Services\Admin;


use App\Model\Group;
use App\Model\UserAccount;
use Illuminate\Support\Facades\Input;

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
    public function update($request,$id)
    {
        $update_group = Group::findorfail($id);
        $update_group->account_id = $request->account_id;
        $update_group->name = $request->name;
        $filename = '';
        if ($request->hasFile('image'))
        {
            $filename =$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/group',$filename);
        }
        $update_group->image = $filename;
        $update_group->save();

        if ($request->has('user_id'))
        {
            $user_id = $request->user_id;
            $array_length = count($user_id);
            $data = Group::where('account_id',$request->account_id)->first();
            UserAccount::where('group_id',$data->id)->update(['group_id'=>null]);
            for ($i=0; $i<$array_length; $i++)
            {
                UserAccount::where('id',$user_id[$i])->update(['group_id'=>$data->id]);
            }
        }
    }
    public function delete($id)
    {
        $group = Group::findorfail($id);
        $users = UserAccount::where('group_id',$id)->update(['group_id'=>null]);
        $group->delete();
//        dd($users);
    }
}
