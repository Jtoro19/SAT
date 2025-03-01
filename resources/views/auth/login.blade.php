<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/sesion.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-container">
        <div class="left-section">
            <div class="content">
                <h1>Bienvenido al sistema de alertas tempranas</h1>
                <h3>Manizales Segura: Anticipando el riesgo, protegiendo tu futuro</h3>
                
                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 text-red-500">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="login-form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <input type="email" placeholder="Correo" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    @error('email')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror
                    
                    <input type="password" placeholder="Contraseña" name="password" required autocomplete="current-password">
                    @error('password')
                        <div class="mt-2 text-red-500">{{ $message }}</div>
                    @enderror

                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember">
                            <span class="ms-2 text-sm">Recordarme</span>
                        </label>
                    </div>

                    <button type="submit">Iniciar Sesión</button>
                </form>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>
        </div>
        <div class="right-section">
            <img src="{{ asset('images/computador.png') }}" alt="Computador">
        </div>
    </div>
</body>
</html>
