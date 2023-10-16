



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Minha Página com Bootstrap 5</title>

    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/inicial/lodding.css">
</head>
<body>

    <!-- Conteúdo da Página -->
    <div class="container">
        <div class="img">
            <img  class="logo angry-animate" src="./assets/imagens/codigoLogo.png" alt="">
            
        </div>
     
    </div>
    <script>
        // Função para redirecionar para a página de login após 5 segundos
        function redirecionarParaLogin() {
            window.location.href = './paginas/login.php';
        }

        // Chama a função de redirecionamento após 5 segundos
        setTimeout(redirecionarParaLogin, 5000); // 5000 milissegundos (5 segundos)
    </script>

    <!-- Adicione os scripts do Bootstrap e jQuery (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
