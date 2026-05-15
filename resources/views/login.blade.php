<x-layout-guest pageTitle="Login">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* 1. FUNDO E LAYOUT GERAL */
        body {
            background: url("{{ asset('assets/images/imagem-fundo.jpeg') }}") center/cover no-repeat fixed;
            background-color: #050a14;
            margin: 0;
            padding: 0;
        }

        /* 2. TOPO DO CARD (ESTILO LOGOTIPO) */
        .top-login {
            background: #1e4bb8; 
            background: linear-gradient(135deg, #1e4bb8 0%, #15368a 100%);
            padding: 3.5rem 1rem;
            border-radius: 0.75rem 0.75rem 0 0;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .logo-box {
            display: flex !important;
            flex-direction: column !important; /* FORÇA UM EMBAIXO DO OUTRO */
            align-items: flex-end !important;   /* ALINHA NA DIREITA DO NOME */
            width: fit-content;
        }

        .logo-box h1 {
            font-style: italic;
            font-weight: 800;
            font-size: 2.8rem;
            letter-spacing: -1.5px;
            line-height: 0.85;
            margin: 0 !important;
            padding: 0 !important;
            color: white;
            text-transform: none;
        }

        .logo-box p {
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin: 0 !important;
            padding: 0 !important;
            opacity: 0.9;
            color: white;
            margin-top: 2px !important;
        }

        /* 3. CORPO DO FORMULÁRIO */
        .container-form {
            background-color: white;
            border-radius: 1rem;
            padding: 0; 
            box-shadow: 0 20px 40px rgba(0,0,0,0.7);
            overflow: hidden;
            margin-bottom: 4rem;
        }

        .form-control {
            border: 1px solid #dee2e6;
            padding: 0.8rem;
            border-radius: 0.5rem;
        }

        .btn-primary-elite {
            background-color: #1e4bb8;
            border: none;
            padding: 0.8rem;
            font-weight: bold;
            color: white;
            transition: 0.3s;
        }

        .btn-primary-elite:hover {
            background-color: #15368a;
            color: white;
        }

        .btn-social {
            background-color: #4371d6;
            color: white;
            border: none;
            padding: 0.7rem;
            font-size: 0.9rem;
            transition: 0.3s;
        }

       /* Ícones sociais - Versão compacta */
        .social-icon {
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            text-decoration: none;
        }

        .social-icon:hover {
            transform: translateY(-2px);
            background-color: var(--amarelo-elite);
        }

        .social-icon:hover i {
            color: var(--azul-deep) !important;
        }

        .social-icon i {
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        /* Links do footer compacto */
        .footer-link {
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.8rem;
        }

        .footer-link:hover {
            color: var(--amarelo-elite) !important;
        }
    </style>

    <main class="d-flex flex-column min-vh-100">
        <div class="container d-flex align-items-center justify-content-center flex-grow-1 py-5">
            <div class="container-form col-12 col-md-4 text-center">
                
                <div class="top-login text-white">
                    <div class="logo-box">
                        <h1 class="mb-0">PreparaElite</h1>
                        <p class="mb-0">Concursos</p>
                    </div>
                </div>

                <div class="px-4 py-5">
                    <h2 class="h4 fw-bold mb-1">Bem-vindo de volta!</h2>
                    <p class="text-muted small mb-4">Acesse sua conta para continuar os seus estudos</p>

                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        
                        <div class="mb-2">
                            <input type="password" name="password" class="form-control" placeholder="Senha" required>
                        </div>

                        <div class="text-end mb-4">
                            <a href="#" class="text-decoration-none small text-primary">Esqueci a minha senha</a>
                        </div>

                        <button type="submit" class="btn btn-primary-elite w-100 rounded-3 mb-3 login-icon">
                            Entrar
                        </button>

                        <div class="my-3 d-flex align-items-center">
                            <hr class="flex-grow-1">
                            <span class="px-3 text-muted small">ou</span>
                            <hr class="flex-grow-1">
                        </div>

                        <div class="d-grid gap-2">
                            <a href="#" class="btn btn-social rounded-3 text-decoration-none">
                                <i class="fab fa-google me-2"></i> Continuar com Google
                            </a>
                            <a href="#" class="btn btn-social rounded-3 text-decoration-none">
                                <i class="fab fa-apple me-2"></i> Continuar com Apple
                            </a>
                        </div>
                    </form>

                    <p class="mt-4 mb-0 small">Não tem uma conta? <a href="#" class="text-primary text-decoration-none fw-bold">Cadastre-se</a></p>
                </div>
            </div>
        </div>

        <!-- RODAPÉ COM ÍCONES CORRETAMENTE ALINHADOS -->
    <footer class="bg-dark text-white py-5 mt-auto">
        <div class="container">
            <div class="row gy-4">
                <!-- Coluna 1 - Sobre -->
                <div class="col-md-4 text-center text-md-start">
                    <h6 class="fw-bold text-uppercase mb-3">Sobre nós</h6>
                    <p class="small text-secondary mb-0">PreparaElite Concursos - Transformando sua dedicação em aprovação real.</p>
                </div>
                
                <!-- Coluna 2 - Links -->
                <div class="col-md-4 text-center text-md-start">
                    <h6 class="fw-bold text-uppercase mb-3">Links</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2">
                            <a href="#" class="text-secondary footer-link">Termos de uso</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-secondary footer-link">Política de privacidade</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-secondary footer-link">Contato</a>
                        </li>
                    </ul>
                </div>
                
                <!-- Coluna 3 - Redes Sociais (CORRIGIDO O ALINHAMENTO) -->
                <div class="col-md-4">
                    <h6 class="fw-bold text-uppercase mb-3 text-center text-md-start">Redes sociais</h6>
                    <div class="d-flex justify-content-center justify-content-md-start gap-3">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/preparaeliteconcursos/" 
                           class="social-icon" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Instagram">
                            <i class="bi bi-instagram text-white"></i>
                        </a>
                        
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/preparaeliteconcursos" 
                           class="social-icon" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="Facebook">
                            <i class="bi bi-facebook text-white"></i>
                        </a>
                        
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@preparaeliteconcursos" 
                           class="social-icon" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="YouTube">
                            <i class="bi bi-youtube text-white"></i>
                        </a>
                        
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/company/preparaeliteconcursos" 
                           class="social-icon" 
                           target="_blank" 
                           rel="noopener noreferrer"
                           aria-label="LinkedIn">
                            <i class="bi bi-linkedin text-white"></i>
                        </a>
                    </div>
                    <p class="small text-secondary mt-3 mb-0 text-center text-md-start">
                        Siga-nos nas redes sociais
                    </p>
                </div>
            </div>
            
            <!-- Linha de copyright -->
            <hr class="bg-secondary my-4">
            <div class="text-center small text-secondary">
                &copy; 2025 PreparaElite Concursos. Todos os direitos reservados.
            </div>
        </div>
    </footer>
    </main>
    <script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </script>
</x-layout-guest>