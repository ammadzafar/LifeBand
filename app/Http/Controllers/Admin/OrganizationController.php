<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrganizationRequest;
use App\Http\Requests\OrganizationUpdateRequest;
use App\Model\Organization;
use App\Services\Admin\AdminServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
    public function organizationDashboard()
    {
        return view('admin.organization.dashboard');
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
//    public function organizationShowModal()
//    {
//        return view('admin.organization.modal');
//    }
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
    public function userIndex()
    {
        try {
            return view('admin.organization.users');
        }
        catch(\Exception $e)
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
}
