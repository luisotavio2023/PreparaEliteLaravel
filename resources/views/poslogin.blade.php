<!doctype html>
<html lang="pt-br">
<head>
  <title>PreparaElite - Inicial</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <style>
    :root {
      --azul-deep: #050a14;
      --azul-royal: #004aad;
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    .bg-hero-gradient {
      background: linear-gradient(135deg, var(--azul-royal) 0%, var(--azul-deep) 100%);
    }

    .logo-box {
      text-decoration: none;
      display: inline-block;
      line-height: 0.8;
    }

    .logo-title {
      font-family: 'Playfair Display', serif;
      font-size: 2.8rem;
      font-weight: 900;
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

    .info-card {
      transition: transform 0.3s ease;
    }
    .info-card:hover {
      transform: translateY(-8px);
    }

    .hero-icon {
      font-size: 12rem;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">

  <header class="bg-hero-gradient pt-3 pb-5 shadow-lg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
      <div class="container">
        <!-- Logo à esquerda -->
        <a href="#" class="logo-box">
          <h1 class="logo-title">
            PreparaElite<span>&reg;</span>
          </h1>
          <p class="logo-subtitle mb-0">Concursos</p>
        </a>

        <!-- Botão mobile -->
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu alinhado à direita com ml-auto -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto align-items-lg-center">
            <li class="nav-item mx-lg-2 my-1">
              <a class="nav-link font-weight-light" href="#">Home</a>
            </li>
            <li class="nav-item mx-lg-2 my-1">
              <a class="nav-link font-weight-light" href="#">Cursos</a>
            </li>
            <li class="nav-item mx-lg-2 my-1">
              <a class="nav-link font-weight-light" href="#">Depoimentos</a>
            </li>
            <li class="nav-item mx-lg-2 my-1">
              <a class="nav-link font-weight-light" href="#">Blog</a>
            </li>
            <li class="nav-item mx-lg-2 my-1">
              <a class="btn btn-warning rounded-pill px-4 font-weight-bold shadow-sm" href="#" style="font-size: 0.95rem;">Área do Aluno</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="container py-5 mt-4">
      <div class="row align-items-center">
        <div class="col-lg-6 text-white text-center text-lg-left">
          <h2 class="display-3 font-weight-bold mb-3">Prepare-se para sua <span class="text-warning">aprovação!</span></h2>
          <p class="lead mb-5 text-white-50">
            Os melhores cursos para concursos públicos com foco total em resultados e produtividade.
          </p>
          <a href="#" class="btn btn-warning btn-lg rounded-pill px-5 font-weight-bold shadow">VER CURSOS</a>
        </div>
        <div class="col-lg-6 d-none d-lg-block text-center text-white-50">
          <i class="bi bi-mortarboard hero-icon"></i>
        </div>
      </div>
    </div>
  </header>

  <main class="flex-grow-1">
    <!-- Cards de recursos -->
    <div class="container" style="margin-top: -3rem;">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card info-card shadow-lg border-0 rounded-lg p-4 h-100">
            <div class="d-flex align-items-center">
              <i class="bi bi-laptop fs-1 text-primary mr-3"></i>
              <div>
                <h5 class="font-weight-bold mb-1">Cursos Completos</h5>
                <p class="small text-muted mb-0">Material focado e sempre atualizado.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
          <div class="card info-card shadow-lg border-0 rounded-lg p-4 h-100">
            <div class="d-flex align-items-center">
              <i class="bi bi-camera-video fs-1 text-primary mr-3"></i>
              <div>
                <h5 class="font-weight-bold mb-1">Aulas ao Vivo</h5>
                <p class="small text-muted mb-0">Tire suas dúvidas em tempo real.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card info-card shadow-lg border-0 rounded-lg p-4 h-100">
            <div class="d-flex align-items-center">
              <i class="bi bi-patch-check fs-1 text-primary mr-3"></i>
              <div>
                <h5 class="font-weight-bold mb-1">Simulados</h5>
                <p class="small text-muted mb-0">Treine com questões de provas reais.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container py-5"></div>
  </main>

  <!-- Rodapé -->
  <footer class="bg-dark text-white-50 pt-5 pb-4 border-top border-secondary">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-0">
          <h5 class="text-white font-weight-bold mb-3">Sobre nós</h5>
          <p class="small pr-md-3">PreparaElite Concursos - A plataforma mais completa para sua preparação em concursos públicos.</p>
        </div>
        <div class="col-12 col-md-3 col-lg-4 mb-4 mb-md-0">
          <h5 class="text-white font-weight-bold mb-3">Links</h5>
          <ul class="list-unstyled small">
            <li><a href="#" class="text-white-50 d-block py-1">Termos de uso</a></li>
            <li><a href="#" class="text-white-50 d-block py-1">Política de privacidade</a></li>
            <li><a href="#" class="text-white-50 d-block py-1">Contato</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 col-lg-4">
          <h5 class="text-white font-weight-bold mb-3">Redes sociais</h5>
          <ul class="list-unstyled small">
            <li><a href="https://www.instagram.com/preparaeliteconcursos/" class="text-white-50 d-block py-1" target="_blank">Instagram</a></li>
            <li><a href="#" class="text-white-50 d-block py-1">Facebook</a></li>
            <li><a href="#" class="text-white-50 d-block py-1">YouTube</a></li>
          </ul>
        </div>
      </div>
      <hr class="bg-secondary my-3">
      <div class="text-center small text-white-50">
        &copy; 2025 PreparaElite Concursos. Todos os direitos reservados.
      </div>
    </div>
  </footer>

  <!-- Scripts Bootstrap 4 -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>