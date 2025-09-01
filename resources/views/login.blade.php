<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreparaÊlite - Login</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>
<body class="min-vh-100 d-flex align-items-center justify-content-center py-5" style="background-image: url('{{ asset('public/img/livrosprateleira.jpg') }}')">
    <div class="container">
        <div class="row shadow-lg rounded-3 overflow-hidden" style="background-color: #002D5B;">
            <!-- Brand Section -->
            <div class="col-md-6 bg-white p-5 d-flex flex-column justify-content-center" style="background-color: #002D5B;">
                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mx-auto" style="width: 120px; height: 120px; background-color: #002D5B;">
                    <span class="text-white fw-bold fs-2">PE</span>
                </div>
                <h1 class="text-center fw-bold my-4 text-primary">PREPARAELITE</h1>
                <p class="text-center fs-5 text-muted">Cursos preparatórios para concursos públicos com valores acessíveis para todos.</p>
            </div>
            
            <!-- Login Section -->
            <div class="col-md-6 bg-white p-5">
                <h2 class="fw-semibold mb-2 text-primary">Seja bem-vindo</h2>
                <p class="text-muted mb-4">Efetue seu login para acessar sua conta</p>
                
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email ou usuário</label>
                        <input type="text" class="form-control form-control-lg" id="email" placeholder="Seu email ou nome de usuário" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <div class="input-group">
                            <input type="password" class="form-control form-control-lg" id="password" placeholder="Sua senha" required>
                            <span class="input-group-text password-toggle" onclick="togglePassword()">
                                <i class="bi bi-eye"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-end mt-2">
                            <a href="#" class="text-decoration-none text-primary">Esqueci a senha</a>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg w-100 mt-3">Entrar</button>
                </form>
                
                <div class="d-flex align-items-center my-4">
                    <hr class="flex-grow-1">
                    <span class="px-3 text-muted">ou</span>
                    <hr class="flex-grow-1">
                </div>
                
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-secondary d-flex align-items-center justify-content-center py-2">
                        <i class="bi bi-google me-2"></i> Entrar com Google
                    </button>
                    <button class="btn btn-outline-secondary d-flex align-items-center justify-content-center py-2">
                        <i class="bi bi-microsoft me-2"></i> Entrar com Microsoft
                    </button>
                </div>
                
                <div class="text-center mt-4">
                    <p class="text-muted">Não tem uma conta? <a href="#" class="text-primary text-decoration-none fw-medium">Cadastre-se</a></p>
                </div>
                
                <div class="text-center mt-4 pt-3 border-top">
                    <small class="text-muted">© PreparaÊlite 2025. Todos os direitos reservados.</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.password-toggle i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('bi-eye');
                toggleIcon.classList.add('bi-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('bi-eye-slash');
                toggleIcon.classList.add('bi-eye');
            }
        }
    </script>
</body>
</html>