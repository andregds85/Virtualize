<?php
session_start();

if (isset($_SESSION['usuario_logado'])) {
  // Usuário está logado
  echo "Bem-vindo, " . $_SESSION['usuario_logado'];
} else {
  // Usuário não está logado
  header('Location: ../../login');
  exit();
}

// Incluindo arquivo de conexão
require_once('../../config/conn.php');

// Selecionando fotos
$stmt = $pdo->query('SELECT id, nome, tipo, tamanho, imob FROM fotos');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="styles.css">


    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://malsup.github.io/min/jquery.form.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">





 <script type="text/javascript">

// Quando carregado a página
$(function ($) {

    // Quando enviado o formulário
    $('#formulario').on('submit', function () {

        // Armazenando objetos em variáveis para utilizá-los posteriormente
        var formulario = $(this);
        var botao = $('#salvar');
        var mensagem = $('#mensagem');

        // Exibindo indicador de carregamento (Bootstrap)
        // Docs: http://getbootstrap.com/javascript/#buttons
        botao.button('loading');

        // Enviando formulário
        $(this).ajaxSubmit({

            // Definindo tipo de retorno do servidor
            dataType: 'json',

            // Se a requisição foi um sucesso
            success: function (retorno) {

                // Se cadastrado com sucesso
                if (retorno.sucesso) {
                    // Definindo estilo da mensagem (sucesso)
                    mensagem.attr('class', 'alert alert-success');

                    // Limpando formulário
                    formulario.resetForm();
                }
                else {
                    // Definindo estilo da mensagem (erro)
                    mensagem.attr('class', 'alert alert-danger');
                }

                // Exibindo mensagem
                mensagem.html(retorno.mensagem);

                // Escondendo indicador de carregamento
                botao.button('reset');

            },

            // Se houver algum erro na requisição
            error: function () {

                // Definindo estilo da mensagem (erro)
                mensagem.attr('class', 'alert alert-danger');

                // Exibindo mensagem
                mensagem.html('Oops, ocorreu um erro');

                // Escondendo indicador de carregamento
                botao.button('reset');
            }

        });

        // Retorna FALSE para que o formulário não seja enviado de forma convencional
        return false;

    });

});

</script>
</head>
<body>
    <header>
        <h1>Administração do Site</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Cadastro</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>Sobre mim</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </section>

   
 <section>

<p>ipiscing elit.</p>




    <form id="formulario" action="../../ajax/salvar.php" method="post">

        <div id="mensagem"></div>

        <div class="form-group">
            <label>Foto</label>
            <input class="form-control" type="file" name="foto"/>
        </div>


        
        <div class="form-group">
           <select name="imob">
            <option value="Venda">Escolha</option>
            <option value="Venda">Venda</option>
            <option value="locacao">Locação</option>
          </select>
        </div>



        <input id="salvar" class="btn btn-primary" type="submit" value="Salvar" data-loading-text="Salvando..."/>

    </form>



        
        
</section>
   
   
   
        <section>
        <div class="card-container">


<?php while ($foto = $stmt->fetchObject()): ?>

<div class="card">
  <img src="../../imagem.php?id=<?php echo $foto->id ?> Card Image"/>

  <div class="card-content">
    <h2 class="card-title"><?php echo $foto->imob ?></h2>
    <p class="card-description">Foto</p>
    <a href="abc.html" class="btn">Mais</a>
  </div>
  </div>

             
      <?php endwhile ?>

</div>
</center>

<p>Descreva.</p>

        </section>
    </main>

    <footer>
        <p>&copy; 2024 - Todos os direitos reservados.</p>
    </footer>
</body>
</html>