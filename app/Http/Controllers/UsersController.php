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
        $user->userName = $request->userName;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
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

    public function showProfile($id)
    {
        // Obtén el usuario autenticado
        $authUser = Auth::user();
        
        // Verifica si el usuario autenticado coincide con el ID
        if ($authUser->id != $id) {
            return redirect()->route('iniciologin')->with('error', 'No tienes permiso para acceder a este perfil.');
        }

        // Busca el usuario por su ID
        $user = User::find($id);
        
        // Verifica si el usuario existe
        if (!$user) {
            return redirect()->route('iniciologin')->with('error', 'Usuario no encontrado');
        }

        // Obtén las direcciones asociadas al usuario (relación user-address)
        $addresses = $user->addresses;

        // Pasa el usuario y las direcciones a la vista
        return view('users.perfil', ['user' => $user, 'addresses' => $addresses]);
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
        $user->userName = $request->userName;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
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
    
        // Verifica si el usuario eliminado es el mismo que está autenticado
        if (Auth::check() && Auth::id() == $user->id) {
            // Cierra la sesión del usuario autenticado
            Auth::logout();
    
            // Redirige a la página de inicio después de cerrar la sesión
            return redirect()->route('inicio')->with('status', 'Tu cuenta ha sido desactivada.');
        }
    
        // Redirige al índice de usuarios si no es el usuario autenticado
        return redirect()->route('users.index')->with('status', 'El usuario ha sido desactivado.');
    }

    public function reportUsersPDF()
    {
        set_time_limit(300);
        $users = User::with('role:id,roleName')
                    ->select('id', 'userName', 'nickname', 'email', 'roleID','phoneNumber')
                    ->whereMonth('created_at', now()->month)
                    ->whereYear('created_at', now()->year)
                    ->get();
    
        $pdf = \PDF::loadView('reportsU.administrator.monthNewUsersPDF', compact('users'));
    
        return $pdf->download('monthNewUsersPDF_' . now()->format('Y_m') . '.pdf');
    }

    public function reportUsersPDFYear()
    {
        set_time_limit(300);
        $users = User::with('role:id,roleName')
                    ->select('id', 'userName', 'nickname', 'email', 'roleID','phoneNumber')
                    ->whereYear('created_at', now()->year)
                    ->get();
    
        $pdf = \PDF::loadView('reportsU.administrator.yearNewUsersPDF', compact('users'));
    
        return $pdf->download('yearNewUsersPDF_' . now()->format('Y_m') . '.pdf');
    }
    
    public function reportUsersPDFMonth(Request $request)
    {
        set_time_limit(300);
        $usersByMonth = User::select(DB::raw('MONTH(created_at) as month'), DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', now()->year)
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy('month')
            ->get();

        // Crear las etiquetas para los meses y los datos para el gráfico
        $chartLabels = $usersByMonth->pluck('month')->map(function($month) {
            return \DateTime::createFromFormat('!m', $month)->format('F');  // Convertir el número de mes al nombre del mes
        });

        $chartData = $usersByMonth->pluck('count');  // Número de usuarios por mes

        // Pasar los datos a la vista
        return view('reportsU.administrator.graph', compact('chartLabels', 'chartData'));
    }



    public function editProfile($id)
    {
        $user = User::find($id);
        return view('users.editProfile', ['user' => $user]);
    }

    public function updateProfile(Request $request, $id)
    {
        $user = user::find($id);
        //$User->roleID = $request->roleID;
        $user->userName = $request->userName;
        $user->nickname = $request->nickname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
        return redirect()->route('users.info', ['id' => $id]);
    }

    public function destroyProfile($id)
    {
        $user = User::find($id);
        
        // Deshabilitar el usuario
        $user->able = 0;
        $user->save();
    
        // Cerrar la sesión del usuario autenticado
        Auth::logout();
    
        // Redirigir a la página de inicio
        return redirect()->route('inicio');
    }
}
