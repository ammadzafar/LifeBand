<?php

namespace App\Http\Controllers\Admin;

use App\Model\Group;
use App\Services\Admin\GroupServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public $group;
    public function __construct(GroupServices $group)
    {
        $this->group = $group;
    }

    public function create($id)
    {
        $group_users = Group::where('account_id',$id)->get();
//        dd($group_users);
        return view('admin.organization.group',compact('group_users'));
    }
    public function store(Request $request)
    {
//        dd($request->all());
        try {
            $this->group->store($request);
            return redirect()->back()->with('success','Group Created Successfully');

        }catch(Exception $e){
            return redirect()->back()->with('error',error_details($e,'something went wrong!'.$e->getMessage()));
        }
    }
    public function edit($id)
    {
        $group = Group::findorfail($id);
//        dd($group->account_id);
        return view('admin.organization.group-modal',compact('group'));
    }

}
