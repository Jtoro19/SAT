<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return view('roles.index', ['roles' => $roles]);
    }

    public function showRegistrationForm()
    {
    // Fetch roles from the database
    $roles = Role::all();

    // Pass roles to the view
    return view('auth.register')->with('roles', $roles);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $role = new Role();
        $role->roleName = $request->roleName;
        $role->label = $request->label;
        $role->description = $request->description;
        $role->able=1;
        $role->save();
        return redirect()->route('roles.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit', ['role' => $role]);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->roleName = $request->roleName;
        $role->label = $request->label;
        $role->description = $request->description;
        $role->save();
        return redirect()->route('roles.index');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->able=0;
        $role->save();
        return redirect()->route('');
    }
}
