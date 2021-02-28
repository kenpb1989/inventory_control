<?php

namespace App\Http\Controllers;

use App\Material;
use App\Report;
use App\Data;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // トップページ
    public function index()
    {
        return view('main.index');
    }

    // 原料リスト表示ページ
    public function list(Request $request)
    {
        $materials = Material::all();
        return view('main.list', compact('materials'));
    }

    // 原料詳細ページ
    public function show(Request $request)
    {
        $stock = 0;
        if ($request->isMethod('post')) {
            $newReport = new Report;
            $newReport->date = $request->date;
            $newReport->in = $request->in;
            $newReport->out = $request->out;
            $newReport->product = $request->product;
            $newReport->loss = $request->loss;
            $newReport->material_id = $request->id;
            $amount = 0;
            $amount += $request->out;
            $amount += $request->product;
            $amount += $request->loss;
            $newReport->amount = $amount;
            $newReport->save();
        }


        $material = Material::find($request->id);
        $reports = Report::where('material_id', $request->id)->orderBy('date', 'asc')->get();

        return view('main.show', compact('material', 'reports'));
    }
}
