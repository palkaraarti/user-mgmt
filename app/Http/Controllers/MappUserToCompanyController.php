<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyUsers;
use App\Models\UserCompanyMapping;

class MappUserToCompanyController extends Controller
{
    public function addusers($id){
        $companyusers = CompanyUsers::all();
        $companyid = $id;
        return view('company_user.addusers',compact('companyusers','companyid'));
    }
    public function adduserspost(Request $request){
        $request->validate([
            'company_id' => 'required',
            'user_id' => 'required',
        ]);
        
        foreach($request->user_id as $val){
           $data['company_id'] = $request->company_id;
           $data['user_id'] = $val;

           UserCompanyMapping::create($data);
        }
        
        return redirect()->route('company.index')
                        ->with('success','Data added successfully.');
    }
}
