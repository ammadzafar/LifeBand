<?php

namespace App\Http\Controllers\Admin;

use App\Model\Group;
use App\Model\UserAccount;
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
        try {
             $group = Group::findorfail($id);
             $group_users = UserAccount::where('group_id',$id)->orWhere('group_id','=',null)->get();
//             dd($group_users);
            return view('admin.organization.group-modal',compact('group','group_users'));
//            return redirect()->back()->with('success','Group Created Successfully');

        }catch(Exception $e){
            return redirect()->back()->with('error',error_details($e,'something went wrong!'.$e->getMessage()));
        }
    }
    public function update(Request $request,$id)
    {
        try {
            $this->group->update($request, $id);
            return redirect()->back()->with('success', 'Group updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', error_details($e, 'something went wrong!' . $e->getMessage()));
        }
    }
    public function delete($id)
    {
//        dd($id);
        try {
            $this->group->delete($id);
            return redirect()->back()->with('success', 'Group deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('error', error_details($e, 'something went wrong!' . $e->getMessage()));
        }
    }
}
