<?php

namespace App\Http\Controllers\Admin;

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

    public function create()
    {
        return view('admin.organization.group');
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

}
