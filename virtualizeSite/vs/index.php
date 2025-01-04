<?php
// Incluindo arquivo de conexão
require_once('config/conn.php');

// Selecionando fotos
$stmt = $pdo->query('SELECT id, nome, tipo, tamanho, imob FROM fotos');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vendosites.com.br</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

     .card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center; 
      max-width: 1400px;
      
    }

    .card {
      width: calc(33.33% - 20px);
      margin: 10px 0;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
    }

    .card-title {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .card-description {
      color: #666;
    }

    .btn {
      display: inline-block;
      padding: 8px 12px;
      margin-top: 10px;
      text-decoration: none;
      background-color: #3498db;
      color: #fff;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #2980b9;
    }

        header {
            background-color:  #3e47c9;
            background-image: url("img/topo.jpg");
            background-size: cover;
            color: #e7eaf8;
            text-align: center;
            padding: 140px 0;
        }

        h2{
            color: tomato;
            font-family: 'Courier New', Courier, monospace;
        }
 
        nav {
            background-color:  #666;
            text-align: center;
            padding: 10px 0;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            margin: 0 20px;
            font-size: 18px;
        }

        section {
            padding: 50px;
            text-align: center;
        }

        section:nth-child(odd) {
            background-color: #f4f4f4;
        }

        footer {
            background-color: #666;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        code{
          font-size: 20px;
        }

        .imgLogo{
          border-radius: 50%;
        }
       


    </style>




  <style>

#contato {
  text-align: center;
  padding: 50px;
  background-color: #f2f2f2;
}

#contato h2 {
  margin-bottom: 30px;
}

#contato form {
  display: flex;
  flex-direction: column;
  width: 50%;
  margin: 0 auto;
}

#contato label {
  margin-bottom: 10px;
}

#contato input,
#contato textarea {
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

#contato button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

</style>



<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">




</head>
<body>
            <header>
            <h1>Vendo sites</h1>
            
            <img src="img/logo.png" class="imgLogo" width="20%" height="20%">
            </header>
                
            <nav>
            <a href="#header">Inicio</a>
            <a href="#produtos">Produtos</a>
            <a href="#vitrine">Vitrine</a>
            <a href="#contato">Contato</a>
            <a href="https://api.whatsapp.com/send?phone=5553981646368&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20seus%20produtos." target="_blank" rel="noopener noreferrer">
  <img src="https://img.icons8.com/color/48/007bff/whatsapp.png" alt="Botão WhatsApp">
</a>
    
           

            </nav>

            
            <section id="produtos">
            <center>


             <div class="card-container">


              <?php while ($foto = $stmt->fetchObject()): ?>

              <div class="card">
                <img src="imagem.php?id=<?php echo $foto->id ?> Card Image"/>

                <div class="card-content">
                  <h2 class="card-title"><?php echo $foto->imob ?></h2>
                  <p class="card-description">Produto</p>
                  <a href="#" class="btn">mais</a>
                </div>
                </div>



           	        	
                    <?php endwhile ?>







           
           
           
           
              </div>
            </center>

            <p>Descreva</p>

        
        
        </section>



        <section id="vitrine">
  <h1>Por que um site é a melhor solução para o seu negócio?</h1>
  <p>Com um site, você conquista mais clientes 24 horas por dia, aumenta suas vendas e fortalece sua marca. Tenha presença digital e destaque-se da concorrência! Crie seu site agora e transforme seu negócio!</p>
  <iframe width="380" height="180" src="https://www.youtube.com/embed/WVeIWE33flk?si=r-uJY9AcQKTO-k-7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

    <p>
    Solicite um orçamento grátis!</p>

  </section>        


<section id="contato">
  <div class="container">
    <div class="grid">
      <div class="grid-item">
      <h2>Entre em contato</h2>
  <form action="mailto:seu_email@exemplo.com" method="post" enctype="text/plain">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="email">Telefone / WhatsApp:</label>
    <input type="text" id="telefone" name="telefone" required>

    <label for="mensagem">Mensagem:</label>
    <textarea id="mensagem" name="mensagem" required></textarea>

    <button type="submit">Enviar</button>
  </form>
      </div>
    <br>
      <div class="grid-item">
            <img src="img/logo.png" class="imgLogo" width="20%" height="20%">

      </div>
    </div>
  </div>
</section>



      


            
            <footer>


            <a href="login" rel="noopener noreferrer">
  <img src="img/login.png" alt="Área Restrita" width=50 heidgth=50>
</a>

&nbsp; &nbsp;   &copy; vendosites.com.br   &copy;

            <a href="https://api.whatsapp.com/send?phone=5553981646368&text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20seus%20produtos." target="_blank" rel="noopener noreferrer">
  <img src="https://img.icons8.com/color/48/007bff/whatsapp.png" alt="Botão WhatsApp">
</a>

&nbsp; &nbsp;

            </footer>
          </body>
          </html>