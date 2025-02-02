<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluviometricStationsController extends Controller
{
    public function index()
    {
        $pluviometricStations = PluviometricStation::all();
        return view('pluviometricStations.index', ['pluviometricStations' => $pluviometricStations]);
    }

    public function store(Request $request)
    {
        $pluviometricStation = new PluviometricStation();
        $pluviometricStation->stationID = $request->stationID;
        $pluviometricStation->rainfall = $request->rainfall;
        $pluviometricStation->save();
        return redirect()->route('pluviometricStations.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pluviometricStation = PluviometricStation::find($id);
        return view('pluviometricStations.edit', ['pluviometricStation' => $pluviometricStation]);
    }

    public function update(Request $request, $id)
    {
        $pluviometricStation = PluviometricStation::find($id);
        $pluviometricStation->stationID = $request->stationID;
        $pluviometricStation->rainfall = $request->rainfall;
        $pluviometricStation->save();
        return redirect()->route('pluviometricStations.index');
    }

    public function destroy($id)
    {
        $pluviometricStation = PluviometricStation::find($id);
        $pluviometricStation->delete();
        return redirect()->route('pluviometricStations.index');
    }
}
