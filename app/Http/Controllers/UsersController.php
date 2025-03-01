<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create'); // Asegúrate de tener esta vista
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'address' => 'nullable|string|max:255',
            'phoneNumber' => 'nullable|string|max:20',
            'roleID' => 'required|integer',
            'password' => 'required|min:8' // Se asegura que la contraseña no sea nula
        ]);

        $user = new User();
        $user->roleID = $request->roleID;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phoneNumber = $request->phoneNumber;
        $user->password = Hash::make($request->password); // Se encripta la contraseña
        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'address' => 'nullable|string|max:255',
            'phoneNumber' => 'nullable|string|max:20',
            'roleID' => 'required|integer',
            'password' => 'nullable|min:8'  // Permite contraseña vacía
        ]);

        // Actualizar datos del usuario
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phoneNumber = $request->phoneNumber;
        $user->roleID = $request->roleID;

        // Si el usuario ingresó una nueva contraseña, la actualizamos
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente.');
    }
}

