<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FamilyAccountRequest;
use App\Model\FamilyAccount;
use App\Services\Admin\FamilyAccountsServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FamilyController extends Controller
{
    protected $family;
    public function __construct(FamilyAccountsServices $family)
    {
        $this->family = $family;
    }
    public function dashboard($id)
    {
        $family_account = FamilyAccount::findorfail($id);
        Session::put('type', 'family');
        return view('admin.family-accounts.dashboard',compact('family_account'));
    }
    public function userIndex()
    {

        return view('admin.family-accounts.users');
    }
    public function index()
    {
        $families = FamilyAccount::all();
        return view('admin.family-accounts.home',compact('families'));
    }
    public function store(FamilyAccountRequest $request)
    {
        try {
            $this->family->familyAccountStore($request);
            return redirect()->route('family.accounts.home')->with('success', 'Family Account Added Successfully!');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
    public function edit($id)
    {
        return $this->family->edit($id);
    }
    public function update(FamilyAccountRequest $request,$id)
    {
        try {
            $this->family->update($request,$id);
            return redirect()->route('family.accounts.home')->with('success', 'Family Account Updated Successfully!');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
    public function delete($id)
    {
        try {
            $this->family->delete($id);
            return redirect()->route('family.accounts.home')->with('success', 'Family Account Deleted Successfully!');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error', error_details($e,'Something went wrong!'.$e->getMessage()));
        }
    }
}
