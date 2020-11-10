<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrganizationRequest;
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
//         dd($request->all());
         $this->organization->organizationStore($request);
         return redirect()->route('organization.home');
    }
    public function organizationDelete($id)
    {
         $this->organization->delete($id);
        return redirect()->route('organization.home');
    }
}
