<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationsController extends Controller
{
    public function index()
    {
        $stations = Station::all();
        return view('stations.index', ['stations' => $stations]);
    }

    public function store(Request $request)
    {
        $station = new Station();
        $station->latitude = $request->latitude;
        $station->longitude = $request->longitude;
        $station->state = $request->state;
        $station->date = $request->date;
        $station->lastMaintenance = $request->lastMaintenance;
        $station->StationType = $request->StationType;
        $station->able = $request->able;
        $station->save();
        return redirect()->route('stations.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $station = Station::find($id);
        return view('stations.edit', ['station' => $station]);
    }

    public function update(Request $request, $id)
    {
        $station = Station::find($id);
        $station->latitude = $request->latitude;
        $station->longitude = $request->longitude;
        $station->state = $request->state;
        $station->date = $request->date;
        $station->lastMaintenance = $request->lastMaintenance;
        $station->StationType = $request->StationType;
        $station->save();
        return redirect()->route('stations.index');
    }

    public function destroy($id)
    {
        $station = Station::find($id);
        $station->able=0;
        $station->save();
        return redirect()->route('stations.index');
    }
}
