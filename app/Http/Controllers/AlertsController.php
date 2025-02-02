<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alert;

class AlertsController extends Controller
{
    public function index()
    {
        $alerts = Alert::all();
        return view('alerts.index', ['alerts' => $alerts]);
    }

    public function store(Request $request)
    {
        $alert = new Alert();
        $alert->reportID = $request->reportID;
        $alert->type = $request->type;
        $alert->alertIntensity = $request->alertIntensity;
        $alert->save();
        return redirect()->route('alerts.index');
    }


    public function create($reportID)
    {
        return view('alerts.create', ['reportID' => $reportID]);
    }
    

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $alert = Alert::find($id);
        return view('alerts.edit', ['alert' => $alert]);
    }

    public function update(Request $request, $id)
    {
        $alert = Alert::find($id);
        $alert->alertIntensity = $request->alertIntensity;
    
        // Mantener los valores originales de reportID y type
        if ($request->has('reportID')) {
            $alert->reportID = $request->reportID;
        }
        if ($request->has('type')) {
            $alert->type = $request->type;
        }
    
        $alert->save();
        return redirect()->route('alerts.index');
    }
    

    public function destroy($id)
    {
        $alert = Alert::find($id);
        $alert->delete();
        return redirect()->route('alerts.index');
    }
    
}
