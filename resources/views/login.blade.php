<x-layout-guest pageTitle="Login">
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

        /* 4. RODAPÉ */
        footer {
            background: rgba(5, 10, 20, 0.95) !important;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        
        .footer-link {
            color: #adb5bd;
            text-decoration: none;
            font-size: 0.85rem;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: white;
        }

                .social-icon {
            font-size: 1.1rem;
        }
        
        .login-icon {
            font-size: 1rem;
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

        <footer class="text-white py-5">
            <div class="container">
                <div class="row text-start opacity-75">
                    <div class="col-md-4 mb-4">
                        <h6 class="fw-bold text-white mb-3">Sobre nós</h6>
                        <p class="small">PreparaElite Concursos - A plataforma mais completa para sua preparação em concursos públicos.</p>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                        <h6 class="fw-bold text-white mb-3">Links</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="footer-link">Termos de uso</a></li>
                            <li><a href="#" class="footer-link">Política de privacidade</a></li>
                            <li><a href="#" class="footer-link">Contato</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4 mb-4">
                        <h6 class="fw-bold text-white mb-3">Redes sociais</h6>
                        <ul class="list-unstyled">
                            <li><a href="#" class="footer-link">Instagram</a></li>
                            <li><a href="#" class="footer-link">Facebook</a></li>
                            <li><a href="#" class="footer-link">YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</x-layout-guest>