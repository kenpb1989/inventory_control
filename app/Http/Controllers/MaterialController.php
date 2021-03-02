<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Company;
use App\Report;

class MaterialController extends Controller
{
    // 新しく原料情報を入力する
    public function new()
    {
        $companies = Company::all();
        return view('material.materialNew', compact('companies'));
    }

    public function newPost(Request $request)
    {
        $rules = ['name' => ['required']];
        $this->validate($request, $rules);
        $material = new Material;
        $material->name = $request->name;
        $material->company_id = $request->company_id;
        $material->save();

        $data = $request->name;



        return view('material.materialNew', compact('data'));
    }



    // 原料情報を編集する
    public function edit(Request $request)
    {
        $material = Material::find($request->id);
        $companies = Company::all();
        return view('material.materialEdit', compact('material', 'companies'));
    }
    public function editPost(Request $request)
    {
        $rules = ['name' => ['required']];
        $this->validate($request, $rules);
        $material = Material::find($request->id);
        $material->name = $request->name;
        $material->company_id = $request->company_id;
        $material->save();

        $data = $request->name;

        return view('material.materialEdit', compact('data'));
    }
}
