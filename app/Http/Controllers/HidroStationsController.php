<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HidroStationsController extends Controller
{
    public function index()
    {
        $hidroStations = HidroStation::all();
        return view('hidroStations.index', ['hidroStations' => $hidroStations]);
    }

    public function store(Request $request)
    {
        $hidroStation = new HidroStation();
        $hidroStation->stationID = $request->stationID;
        $hidroStation->temperature = $request->temperature;
        $hidroStation->humidity = $request->humidity;
        $hidroStation->atmosphericPressure = $request->atmosphericPressure;
        $hidroStation->save();
        return redirect()->route('hidroStations.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $hidroStation = HidroStation::find($id);
        return view('hidroStations.edit', ['hidroStation' => $hidroStation]);
    }

    public function update(Request $request, $id)
    {
        $hidroStation = HidroStation::find($id);
        $hidroStation->stationID = $request->stationID;
        $hidroStation->temperature = $request->temperature;
        $hidroStation->humidity = $request->humidity;
        $hidroStation->atmosphericPressure = $request->atmosphericPressure;
        $hidroStation->save();
        return redirect()->route('hidroStations.index');
    }

    public function destroy($id)
    {
        $hidroStation = HidroStation::find($id);
        $hidroStation->delete();
        return redirect()->route('hidroStations.index');
    }
}
