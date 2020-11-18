<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrganizationRequest;
use App\Http\Requests\OrganizationUpdateRequest;
use App\Model\Organization;
use App\Model\OrganizationUser;
use App\Model\UserAccount;
use App\Services\Admin\AdminServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OrganizationController extends Controller
{
    protected $organization;
    public function __construct(AdminServices $organization)
    {
        $this->organization = $organization;
    }

    public function organizationIndex()
    {
        $organizations = Organization::all();
        return view ('admin.organization.home',compact('organizations'));
    }
    public function organizationDashboard($id)
    {
        $organization = Organization::findorfail($id);
        Session::put('type','organization');
        return view('admin.organization.dashboard',compact('organization'));
    }
    public function userIndex($id)
    {
        try {
            $organization = Organization::findorfail($id);
            $users = UserAccount::where('account_id',$organization->id)->get();
            return view('admin.organization.users',compact('organization','users'));
        }catch(\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
    public function groupIndex()
    {
        try {
            return view('admin.organization.group');
        }
        catch(\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
    public function organizationStore(OrganizationRequest $request)
    {
        try {
            $this->organization->organizationStore($request);
            return redirect()->route('organization.home')->with('success', 'Organization Added Successfully!');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
    public function organizationEdit($id)
    {
            return $this->organization->Edit($id);
    }
    public function organizationUpdate(OrganizationUpdateRequest $request,$id)
    {
        try {
            $this->organization->update($request,$id);
            return redirect()->route('organization.home')->with('success', 'Organization Updated Successfully!');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
    public function organizationDelete($id)
    {
        try {
            $this->organization->delete($id);
            return redirect()->route('organization.home')->with('success', 'Organization Deleted Successfully!');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
}
