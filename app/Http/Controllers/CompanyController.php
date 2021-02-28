<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    // 新しく会社情報を登録する
    public function new()
    {
        return view('company.companyNew');
    }

    public function newPost(Request $request)
    {
        $company = new Company;
        $company->name = $request->name;
        $company->save();

        $data = $request->name;

        return view('company.companyNew', compact('data'));
    }


    // 会社情報を編集する
    public function edit(Request $request)
    {
        $company = Company::find($request->id);
        return view('company.companyEdit', compact('company'));
    }

    public function editPost(Request $request)
    {
        $company = Company::find($request->id);
        $company->name = $request->name;
        $company->save();

        $data = $request->name;

        return view('company.companyEdit', compact('data'));
    }
}
