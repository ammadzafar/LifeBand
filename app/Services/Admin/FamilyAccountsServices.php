<?php


namespace App\Services\Admin;


use App\Model\FamilyAccount;

class FamilyAccountsServices
{
    public function familyAccountStore($request)
    {
        $family_account = new FamilyAccount();
        $family_account->admin_name = $request->admin_name;
        $family_account->contact_no = $request->contact_no;

        if ($request->hasFile('image'))
        {
            $filename =$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/family/images',$filename);
        }

        $family_account->image = $filename;
        $family_account->email = $request->email;
        $family_account->bands = $request->bands;
        $family_account->emergency_contact = $request->emergency_contact;

        $family_account->save();
    }
    public function edit($id)
    {
        $family_account_data = FamilyAccount::findorfail($id);
        return view('admin.family-accounts.modal',compact('family_account_data'));
    }
    public function update($request,$id)
    {
        $update_family_account = FamilyAccount::findorfail($id);
        $update_family_account = new FamilyAccount();
        $update_family_account->admin_name = $request->admin_name;
        $update_family_account->contact_no = $request->contact_no;

        if ($request->hasFile('image'))
        {
            $filename =$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/family/images',$filename);
        }

        $update_family_account->image = $filename;
        $update_family_account->email = $request->email;
        $update_family_account->bands = $request->bands;
        $update_family_account->emergency_contact = $request->emergency_contact;

        $update_family_account->save();
    }
    public function delete($id)
    {
        $family_account = FamilyAccount::findorfail($id);
        $family_account->delete();
    }
}
