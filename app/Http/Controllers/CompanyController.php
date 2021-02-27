<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;


class CompanyController extends Controller
{
    public function new()
    {
        return view('company.companyNew');
    }

    public function new2(Request $request)
    {
        $company = new Company;
        $company->name = $request->name;
        $company->save();

        $data = $request->name;

        return view('company.companyNew', compact('data'));
    }

    public function edit(Request $request)
    {
        $company = Company::find($request->id);
        return view('company.companyEdit', compact('company'));
    }
    public function edit2(Request $request)
    {
        $company = Company::find($request->id);
        $company->name = $request->name;
        $company->save();

        $data = $request->name;

        return view('company.companyEdit', compact('data'));
    }
}
