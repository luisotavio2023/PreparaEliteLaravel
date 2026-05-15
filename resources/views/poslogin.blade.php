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

    <!-- RODAPÉ (Padrão Login) -->
    <footer class="bg-dark text-white py-5 mt-auto">
        <div class="container text-center text-md-start">
            <div class="row gy-4">
                <div class="col-md-4">
                    <h6 class="fw-bold text-uppercase mb-3">Sobre nós</h6>
                    <p class="small text-secondary mb-0">PreparaElite Concursos - Transformando sua dedicação em aprovação real.</p>
                </div>
                <div class="col-md-4">
                    <h6 class="fw-bold text-uppercase mb-3">Links</h6>
                    <ul class="list-unstyled small text-secondary">
                        <li class="mb-1">Termos de uso</li>
                        <li class="mb-1">Política de privacidade</li>
                    </ul>
                </div>
                <div class="col-md-4 text-md-end">
                    <h6 class="fw-bold text-uppercase mb-3">Redes sociais</h6>
                    <div class="d-flex justify-content-md-end gap-3 fs-5">
                        <i class="bi bi-instagram"></i>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-youtube"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>