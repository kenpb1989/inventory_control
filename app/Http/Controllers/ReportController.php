<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 一時セーブ
class ReportController extends Controller
{
    public function new(Request $request)
    {
        $report = Report::find($id);
        return view('report.reportEdit');
    }
}
