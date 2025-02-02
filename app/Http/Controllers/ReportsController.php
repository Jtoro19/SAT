<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return view('reports.index', ['reports' => $reports]);
    }

    public function store(Request $request)
    {
        $report = new Report();
        $report->stationID = $request->stationID;
        $report->date = $request->date;
        $report->quantity = $request->quantity;
        $report->able = 1;
        $report->save();
        return redirect()->route('reports.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $report = Report::find($id);
        return view('reports.edit', ['report' => $report]);
    }

    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $report->stationID = $request->stationID;
        $report->date = $request->date;
        $report->quantity = $request->quantity;
        $report->save();
        return redirect()->route('reports.index');
    }

    public function destroy($id)
    {
        $report = Report::find($id);
        $report->able=0;
        $report->save();
        return redirect()->route('reports.index');
    }
}
