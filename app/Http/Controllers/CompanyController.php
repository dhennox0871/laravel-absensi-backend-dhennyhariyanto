<?php

namespace App\Http\Controllers;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function show($id){
        $company=Company::find(1);
        return view('pages.company.show',compact('company'));
    }

    //edit
    public function edit($id){
        $company=Company::find(1);
        return view('pages.company.edit',compact('company'));
    }

    //update company
    public function update(Request $request){
        $company=Company::find(1);
        $company->update($request->all());
        return redirect()->route('companies.show',1);
    }
}
