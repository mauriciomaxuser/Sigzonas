<form method="POST" action="{{ url('/login') }}">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input 
            type="email" 
            class="form-control" 
            id="email" 
            name="email" 
            placeholder="ejemplo@correo.com" 
            value="{{ old('email') }}"
            required 
            autofocus
        >
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input 
            type="password" 
            class="form-control" 
            id="password" 
            name="password" 
            placeholder="********" 
            required
        >
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Entrar</button>
    </div>

    <div class="mt-3 text-center">
        ¿No tienes cuenta? <a href="/register">Regístrate</a>
    </div>
</form>
