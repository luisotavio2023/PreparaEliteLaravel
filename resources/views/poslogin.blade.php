<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreparaElite - Home</title>

    <!-- 1. Fontes Externas (Google Fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,900&family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- 2. Bootstrap CSS e Ícones -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* Variáveis de Cores para facilitar a manutenção */
        :root {
            --azul-deep: #050a14;
            --azul-royal: #004aad;
            --amarelo-elite: #ffc107; /* Cor 'warning' do Bootstrap */
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        /* Hero Section com o degradê azul escuro */
        .bg-hero-gradient {
            background: linear-gradient(135deg, var(--azul-royal) 0%, var(--azul-deep) 100%);
        }

        /* --- ESTILO DA LOGO (Sem Stroke/Gambiarras) --- */
        .logo-box {
            text-decoration: none;
            display: inline-block;
            line-height: 0.8;
        }

        .logo-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            font-weight: 900; /* Peso máximo da fonte */
            font-style: italic;
            letter-spacing: -1.5px;
            color: white;
            margin: 0;
            padding: 0;
        }

        .logo-title span {
            font-size: 1rem;
            vertical-align: super;
            font-style: normal;
            font-family: sans-serif;
            margin-left: 2px;
        }

        .logo-subtitle {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-align: right;
            margin-top: 4px;
            color: white;
            opacity: 0.9;
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

        /* Botão hero */
        .btn-warning {
            transition: all 0.3s ease;
        }

        .btn-warning:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }

        /* Ajuste fino para os cards flutuantes */
        .info-card {
            border: none;
            border-radius: 16px;
            transition: transform 0.3s ease;
        }
        .info-card:hover {
            transform: translateY(-8px);
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- CABEÇALHO -->
    <header class="bg-hero-gradient pt-3 pb-5 shadow-lg">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                
                <!-- LOGO -->
                <a href="#" class="logo-box">
                    <h1 class="logo-title">
                        PreparaElite<span>&reg;</span>
                    </h1>
                    <p class="logo-subtitle m-0">
                        Concursos
                    </p>
                </a>

                <!-- BOTÃO MOBILE -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- MENU --><!-- MENU COM FONTES IGUAIS E MAIOR ESPAÇAMENTO -->
             <div class="collapse navbar-collapse" id="navbarNav">
                 <!-- gap-lg-4 cria o espaçamento maior entre os itens em telas grandes -->
                 <ul class="navbar-nav ms-auto align-items-center gap-lg-5">
                     <li class="nav-item">
                           <a class="nav-link active fw-lighter " href="#" style="font-size: 0.98rem; letter-spacing: 0.5px;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-lighter " href="#" style="font-size: 0.98rem; letter-spacing: 0.5px;">Cursos</a>
                        </li>
                     <li class="nav-item">
                           <a class="nav-link fw-lighter " href="#" style="font-size: 0.98rem; letter-spacing: 0.5px;">Depoimentos</a>
                        </li>
                     <li class="nav-item">
                         <a class="nav-link fw-lighter " href="#" style="font-size: 0.98rem; letter-spacing: 0.5px;">Blog</a>
                        </li>
                     <li class="nav-item">
                            <!-- Botão com o mesmo font-size dos links -->
                           <a class="btn btn-warning rounded-pill px-4 fw-lighter e shadow-sm" href="#" style="font-size: 0.98rem; letter-spacing: 0.5px;">
                                Área do Aluno
                           </a>
                       </li>
                 </ul>
                </div>
            </div>
        </nav>

        <!-- SEÇÃO HERO (Destaque Principal) -->
        <div class="container py-5 mt-4">
            <div class="row align-items-center">
                <div class="col-lg-6 text-white text-center text-lg-start">
                    <h2 class="display-3 fw-bolder mb-3">Prepare-se para sua <span class="text-warning">aprovação!</span></h2>
                    <p class="lead mb-5 opacity-75">
                        Os melhores cursos para concursos públicos com foco total em resultados e produtividade.
                    </p>
                    <button class="btn btn-warning btn-lg rounded-pill px-5 fw-bold shadow">VER CURSOS</button>
                </div>
                <!-- Espaço para a imagem (Placeholder) -->
                <div class="col-lg-6 d-none d-lg-block text-center text-white opacity-25">
                    <i class="bi bi-mortarboard" style="font-size: 12rem;"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- CARDS DE RECURSOS (Entrando no azul) -->
    <section class="container" style="margin-top: -3.5rem;">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card info-card shadow-lg p-4 h-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-laptop fs-1 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Cursos Completos</h5>
                            <p class="small text-muted mb-0">Material focado e sempre atualizado.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card info-card shadow-lg p-4 h-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-camera-video fs-1 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Aulas ao Vivo</h5>
                            <p class="small text-muted mb-0">Tire suas dúvidas em tempo real.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card info-card shadow-lg p-4 h-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-patch-check fs-1 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Simulados</h5>
                            <p class="small text-muted mb-0">Treine com questões de provas reais.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>

    <!-- CURSOS EM DESTAQUE -->
    <section class="container my-5">
        <h2 class="fw-bold text-center mb-4">Cursos em Destaque</h2>
        <div class="row row-cols-2 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://preview.redd.it/special-operations-of-the-s%C3%A3o-paulo-military-police-gate-v0-lo8kxfd63n871.jpg?width=640&crop=smart&auto=webp&s=ae66ee1b86c4c62c025eefaef3b6a5c3775bc8b2" class="card-img-top" alt="PMESP">
                    <div class="card-body d-flex flex-column">
                        <h6 class="fw-bold mb-0">PMESP</h6>
                        <small class="text-primary fw-semibold">Soldado</small>
                        <p class="small text-muted mt-2">Prepare-se para a Polícia Militar do Estado de São Paulo.</p>
                        <a href="#" class="btn btn-primary w-100 mt-auto">Ver Curso</a>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjFAhbpHCxH1Cd2i42YVHKp_0MLEe07vAufA&s" alt="PC SP">
                    <div class="card-body d-flex flex-column">
                        <h6 class="fw-bold mb-0">PC SP</h6>
                        <small class="text-primary fw-semibold">Soldado</small>
                        <p class="small text-muted mt-2">Conteúdo atualizado para Carreiras Policias Civis.</p>
                        <a href="#" class="btn btn-primary w-100 mt-auto">Ver Curso</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://portal.estrategia.com/wp-content/uploads/2024/09/o-que-e-prf-profissional-da-prf-em-uma-das-principais-rodovias-do-brasil.jpg" class="card-img-top" alt="PRF">
                    <div class="card-body d-flex flex-column">
                        <h6 class="fw-bold mb-0">PRF</h6>
                        <small class="text-primary fw-semibold">Escrivão/Investigador</small>
                        <p class="small text-muted mt-2">Prepare-se para uma das carreiras mais disputadas.</p>
                        <a href="#" class="btn btn-primary w-100 mt-auto">Ver Curso</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="https://omentorconcursos.com.br/wp-content/uploads/2023/07/PF-ou-PRF.webp" class="card-img-top" alt="PF">
                    <div class="card-body d-flex flex-column">
                        <h6 class="fw-bold mb-0">PF</h6>
                        <small class="text-primary fw-semibold">Policial Rodoviário Federal</small>
                        <p class="small text-muted mt-2">Conteúdo completo para Polícia Federal.</p>
                        <a href="#" class="btn btn-primary w-100 mt-auto">Ver Curso</a>
                    </div>
                </div>
            </div>


            

        </div>

    </section>


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

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>