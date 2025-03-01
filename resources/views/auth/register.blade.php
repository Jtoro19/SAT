<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <div class="left-section">
            <div class="content">
                <h1>Bienvenido al sistema de alertas tempranas</h1>
                <h3>Para iniciar sesión debes registrarte primero</h3>
                
                <form class="login-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror

                    <input type="text" placeholder="Correo" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror

                    <input type="text" placeholder="Dirección" name="address" value="{{ old('address') }}" required>
                    @error('address')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror

                    <input type="text" placeholder="Número de Teléfono" name="phoneNumber" value="{{ old('phoneNumber') }}" required>
                    @error('phoneNumber')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror
                    
                    <input type="password" placeholder="Contraseña" name="password" required>
                    @error('password')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror
                    
                    <input type="password" placeholder="Confirmar Contraseña" name="password_confirmation" required>
                    @error('password_confirmation')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror

                    <input type="hidden" name="roleID" value="3">
                    
                    <button type="submit">Registrarse</button>
                </form>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    ¿Ya estás registrado?
                </a>
            </div>
        </div>
        <div class="right-section">
            <img src="{{ asset('images/computador.png') }}" alt="Computador">
        </div>
    </div>
</body>
</html>


