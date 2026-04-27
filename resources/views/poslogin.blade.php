<!doctype html>
<html lang="pt-br">
<head>
    <title>PreparaElite - Inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* Garantir que html e body ocupem 100% da altura da viewport */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /* Aplicar Flexbox ao body */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ESSE É O SEGREDO: o rodapé usa margin-top: auto para ir para o final */
        .custom-footer {
            margin-top: auto;
            background: rgba(5, 10, 20, 0.95) !important;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding: 2rem 0;
        }

        /* Estilos de link e texto (opcionais) */
        .custom-footer h4 {
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        .custom-footer p, 
        .custom-footer a {
            color: #adb5bd;
            text-decoration: none;
            font-size: 0.85rem;
            transition: 0.3s;
            display: block;
            margin-bottom: 0.5rem;
        }

        .custom-footer a:hover {
            color: white;
        }
    </style>
</head>
<body>

    <!-- NENHUM CONTEÚDO ADICIONAL NECESSÁRIO! O RODAPÉ JÁ IRÁ PARA O FINAL MESMO ASSIM -->

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

    <!-- Scripts (opcionais) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>