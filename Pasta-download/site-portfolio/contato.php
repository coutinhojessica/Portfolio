<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-page.css">
    <title>Página Projetos</title>
    <link rel="shortcut icon" href="assets/Imagens/favicon_io2/favicon.ico" type="image/x-icon">
</head>
<body class="body-contato">
    <div class="cabecalho"><?php include 'cabecalho.php' ?></div>
        <div class="conteiner-contato">
            <div class="conteiner-formulario">
                <h1 class="titulo-contato">Bem-vindos!</h1>
                <form class="dados-fomulario" action="" method="post">
                    <label for="titulo-nome">Nome Completo:</label>
                    <br>
                    <input type="text" placeholder="Exemplo Usuario">
                    <br>
                    <label for="titulo-telefone">Número de Telefone:</label>
                    <p>Procedimento com o intuito de poder lhe contactar de mameira mais rápida.</p>
                    <input type="number" name="telefone" id="" placeholder="(XX) XXXXX-XXXX">
                    <br>
                    <label for="titulo-email">E-mail:</label>
                    <p>Procedimento com o intiuto de poder lhe contactar.</p>
                    <input type="email" name="Email" id="campo-email" placeholder="Usuario@exemplo.com">
                    <br>
                    <label for="titulo-assunto">Assunto:</label>
                    <br>
                    <input type="text" name="assunto" id="" placeholder="Exemplo">
                    <br>
                    <label for="titulo-mensagem">Mensagem:</label>
                    <br>
                    <textarea name="campo-de-mensagem" placeholder="Informe aqui a finalidade de seu contato." id="" cols="67" rows="12"></textarea>
                    <br> 
                    <br>
                    
                    <div class="button-form">
                        <input class="cancelar-button" type="button" value="Cancelar">
                        <input class="enviar-button" type="submit" value="Enviar">
                    </div>
                   
                
                </form>
            </div>
        </div>
        <div class="rodape"><?php include 'rodape.php' ?></div>
       
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>