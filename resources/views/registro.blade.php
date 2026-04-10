<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PreparaElite - Cadastro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonte bonita -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- ÍCONES -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- FONTE AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        /* Estilos complementares que não são facilmente substituídos pelo Bootstrap */
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background-image: url('imagens/fundo.png');
            background-size: cover;
            background-position: center;
            padding-top: 48px;
        }
        
        .custom-card {
            background-color: white;
            max-width: 460px;
            border-radius: 16px;
            overflow: hidden;
            margin: 0 auto 40px auto;
        }
        
        .custom-card-header {
            background: linear-gradient(90deg, #16378b, #1a4bcc);
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .custom-card-header img {
            width: 200px;
            display: block;
            margin-top: 20px;
        }
        
        .custom-card-body {
            padding: 20px 24px;
        }
        
        .titulo {
            font-size: 1.4rem;
            color: #111;
            text-align: center;
            margin-bottom: 4px;
        }
        
        .subtitulo {
            font-size: 0.9rem;
            color: #666666;
            text-align: center;
            margin-bottom: 24px;
        }
        
        .input-group-custom {
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.2s;
        }
        
        .input-group-custom:focus-within {
            border-color: #1a4bcc;
        }
        
        .input-icon {
            padding: 12px 14px;
            color: #999;
            font-size: 14px;
            border-right: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        
        .custom-input {
            border: none;
            outline: none;
            padding: 12px;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
        }
        
        .custom-input:focus {
            outline: none;
            box-shadow: none;
        }
        
        .btn-custom {
            padding: 12px;
            background-color: #1a4bcc;
            color: white;
            border-radius: 8px;
            transition: all 0.2s;
        }
        
        .btn-custom:hover {
            background-color: #163ea8;
            color: white;
        }
        
        .divider {
            text-align: center;
            margin: 20px 0;
            color: #999;
        }
        
        .social {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            background: #3367d8;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.2s ease;
            color: white;
        }
        
        .social:hover {
            background-color: #1956da;
            border-color: #1a4bcc;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(160, 135, 135, 0.08);
            color: white;
        }
        
        .custom-footer {
            background-color: rgba(5, 12, 40, 0.85);
            padding: 24px 0;
            margin-top: auto;
        }
        
        .footer-col h4 {
            color: white;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .footer-col p, .footer-col a {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.78rem;
            line-height: 1.8;
            text-decoration: none;
            display: block;
        }
        
        .footer-col a:hover {
            color: white;
        }
        
        @media (min-width: 768px) {
            .custom-footer {
                padding: 24px 200px;
            }
        }
    </style>
</head>
<body class="d-flex flex-column">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="custom-card">
                    <div class="custom-card-header">
                        <img src="imagens/logo.png" alt="Logo" class="img-fluid">
                    </div>
                    <div class="custom-card-body">
                        <h1 class="titulo">Crie sua conta</h1>
                        <p class="subtitulo">Preencha os dados abaixo</p>
                        
                        <form>
                            <div class="mb-3">
                                <div class="input-group-custom d-flex align-items-center">
                                    <i class="fa-solid fa-user input-icon"></i>
                                    <input type="text" class="custom-input w-100" placeholder="Nome completo">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="input-group-custom d-flex align-items-center">
                                    <i class="fa-solid fa-envelope input-icon"></i>
                                    <input type="email" class="custom-input w-100" placeholder="E-mail">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="input-group-custom d-flex align-items-center">
                                    <i class="fa-solid fa-lock input-icon"></i>
                                    <input type="password" class="custom-input w-100" placeholder="Senha">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-custom w-100">Criar conta</button>
                        </form>
                        
                        <div class="divider">ou</div>
                        
                        <button class="social mb-3">
                            <i class="ri-google-fill"></i>
                            Continuar com Google
                        </button>
                        
                        <button class="social">
                            <i class="ri-apple-fill"></i>
                            Continuar com Apple
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 footer-col mb-4 mb-md-0">
                    <h4>Sobre nós</h4>
                    <p>PreparaElite Concursos - A plataforma mais completa para sua preparação em concursos públicos.</p>
                </div>
                <div class="col-12 col-md-3 col-lg-4 footer-col mb-4 mb-md-0">
                    <h4>Links</h4>
                    <a href="#">Termos de uso</a>
                    <a href="#">Política de privacidade</a>
                    <a href="#">Contato</a>
                </div>
                <div class="col-12 col-md-3 col-lg-4 footer-col">
                    <h4>Redes sociais</h4>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">YouTube</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>