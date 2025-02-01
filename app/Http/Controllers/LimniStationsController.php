<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LimniStationsController extends Controller
{
    public function index()
    {
        $limniStations = LimniStation::all();
        return view('limniStations.index', ['limniStations' => $limniStations]);
    }
    
    public function store(Request $request)
    {
        $limniStation = new LimniStation();
        $limniStation->stationID = $request->stationID;
        $limniStation->streamVolume = $request->streamVolume;
        $limniStation->save();
        return redirect()->route('limniStations.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $limniStation = LimniStation::find($id);
        return view('limniStations.edit', ['limniStation' => $limniStation]);
    }

    public function update(Request $request, $id)
    {
        $limniStation = LimniStation::find($id);
        $limniStation->stationID = $request->stationID;
        $limniStation->streamVolume = $request->streamVolume;
        $limniStation->save();
        return redirect()->route('limniStations.index');
    }

    public function destroy($id)
    {
        $limniStation = LimniStation::find($id);
        $limniStation->delete();
        return redirect()->route('limniStations.index');
    }
}
