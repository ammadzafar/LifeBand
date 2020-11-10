<?php


namespace App\Services\Admin;


use App\Model\Organization;

class AdminServices
{
    public function organizationStore($request)
    {
        $organization = new Organization();
        $organization->name = $request->name;
        $organization->category = $request->category;

        if ($request->hasFile('image'))
        {
            $filename =$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/organization/logos',$filename);
        }

        $organization->image = $filename;
        $organization->email = $request->email;
        $organization->bands = $request->bands;
        $organization->admin_name = $request->admin_name;

        $organization->save();
    }
    public function delete($id)
    {
        $organization = Organization::findorfail($id);
        $organization->delete();
    }
}
