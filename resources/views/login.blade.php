@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card border-0 shadow-lg overflow-hidden">
            <div class="card-header bg-primary text-white text-center py-4">
                <img src="{{ asset('images/BrasaoPreparaSF.png') }}" alt="PreparaElite" class="img-fluid mb-3" style="max-width: 180px;">
                <h2 class="mb-0">Bem-vindo de volta!</h2>
                <p class="mb-0">Acesse sua conta para continuar seus estudos</p>
            </div>
            
            <div class="card-body p-4 p-md-5">
                @if($errors->any())
                    <div class="alert alert-danger d-flex align-items-center">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger d-flex align-items-center">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        {{ session('error') }}
                    </div>
                @endif
                
                <form method="POST" action="">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}" 
                                   placeholder="seu@email.com" required autofocus>
                        </div>
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="password" class="form-label">Senha</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light"><i class="fas fa-lock text-muted"></i></span>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                   id="password" name="password" placeholder="Sua senha" required>
                        </div>
                        @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="text-end mt-2">
                            <a href="" class="text-decoration-none">Esqueceu a senha?</a>
                        </div>
                    </div>
                    
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Lembrar-me</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 py-3 mb-3 fw-bold">
                        <i class="fas fa-sign-in-alt me-2"></i> Entrar
                    </button>
                    
                    <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="mx-3 text-muted">ou</span>
                        <hr class="flex-grow-1">
                    </div>
                    
                    <div class="mb-4">
                        <button type="button" class="btn btn-outline-primary w-100 mb-2">
                            <i class="fab fa-google me-2"></i> Continuar com Google
                        </button>
                        <button type="button" class="btn btn-outline-dark w-100">
                            <i class="fab fa-apple me-2"></i> Continuar com Apple
                        </button>
                    </div>
                    
                    <div class="text-center">
                        <p class="mb-0">Não tem uma conta? <a href="{{ route('register') }}" class="text-decoration-none fw-bold">Cadastre-se</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection