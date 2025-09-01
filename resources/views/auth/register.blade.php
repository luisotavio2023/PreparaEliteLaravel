@extends('app')

@section('title', 'Cadastro - PreparaElite Concursos')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg overflow-hidden">
                <div class="card-header bg-primary text-white py-3 text-center">
                    <h3 class="mb-1">Crie sua conta</h3>
                    <p class="mb-0">Junte-se a milhares de concurseiros de elite</p>
                </div>
                
                <div class="card-body p-4 p-md-5">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/BrasaoPreparaSF.png') }}" alt="PreparaElite" class="img-fluid" style="max-width: 180px;">
                    </div>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            <strong>Erro!</strong> {{ $errors->first() }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nome completo</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Digite seu nome" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="seu@email.com" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mt-1">
                            <div class="col-md-6">
                                <label for="password" class="form-label">Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Crie uma senha forte" required>
                                </div>
                                <div class="form-text">Mínimo de 8 caracteres</div>
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Repita sua senha" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mt-1">
                            <div class="col-md-6">
                                <label for="cpf" class="form-label">CPF</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf') }}" placeholder="000.000.000-00" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="birth_date" class="form-label">Data de Nascimento</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{ old('birth_date') }}" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <label for="about" class="form-label">Sobre você</label>
                            <textarea class="form-control" id="about" name="about" rows="3" placeholder="Conte um pouco sobre seus objetivos e experiências">{{ old('about') }}</textarea>
                            <div class="form-text">Esta informação ajudará nossos professores a te conhecerem melhor</div>
                        </div>
                        
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">Li e aceito os <a href="#">Termos de Uso</a> e <a href="#">Política de Privacidade</a></label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary w-100 py-2 mt-3">
                            <i class="fas fa-user-plus me-2"></i> Criar conta
                        </button>
                    </form>
                    
                    <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="px-3 text-muted">ou</span>
                        <hr class="flex-grow-1">
                    </div>
                    
                    <div class="row g-2">
                        <div class="col-md-6">
                            <a href="{{ route('login.social', 'google') }}" class="d-flex align-items-center justify-content-center btn btn-danger mb-2 text-decoration-none">
                                <i class="fab fa-google me-2"></i> Cadastre-se com Google
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('login.social', 'facebook') }}" class="d-flex align-items-center justify-content-center btn btn-primary mb-2 text-decoration-none" style="background-color: #4267b2;">
                                <i class="fab fa-facebook-f me-2"></i> Cadastre-se com Facebook
                            </a>
                        </div>
                    </div>
                    
                    <div class="text-center mt-4">
                        <p class="mb-0">Já tem uma conta? <a href="{{ route('login') }}" class="fw-bold text-decoration-none">Faça login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function(){
        $('#cpf').mask('000.000.000-00', {reverse: false});
        
        // Validação de formulário
        $('form').submit(function(e) {
            let password = $('#password').val();
            if (password.length < 8) {
                alert('A senha deve ter no mínimo 8 caracteres');
                e.preventDefault();
            }
        });
    });
</script>
@endpush