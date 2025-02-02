<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->roleID = $request->roleID;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->able=1;
        $user->save();
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = user::find($id);
        //$User->roleID = $request->roleID;
        // $user->userName = $request->userName;
        // $user->nickname = $request->nickname;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $user->phoneNumber = $request->phoneNumber;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->route('users.index');
    }


    public function destroy($id)
    {
        // Encuentra al usuario por su ID
        $user = User::find($id);
        
        // Deshabilita el usuario
        $user->able = 0;
        $user->save();
    
        // // Verifica si el usuario eliminado es el mismo que está autenticado
        // if (Auth::check() && Auth::id() == $user->id) {
        //     // Cierra la sesión del usuario autenticado
        //     Auth::logout();
    
        //     // Redirige a la página de inicio después de cerrar la sesión
        //     return redirect()->route('inicio')->with('status', 'Tu cuenta ha sido desactivada.');
        // }
    
        // // Redirige al índice de usuarios si no es el usuario autenticado
        // return redirect()->route('users.index')->with('status', 'El usuario ha sido desactivado.');
    }
}
