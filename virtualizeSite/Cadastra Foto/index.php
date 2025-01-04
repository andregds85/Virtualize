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
    <title>Linguagem C</title>
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
            color: #e7eaf8;
            text-align: center;
            padding: 20px 0;
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
            background-color: #3e47c9;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        code{
          font-size: 20px;
        }
       


    </style>
</head>
<body>
            <header>
            <h1>Linguagem C</h1>
            <img src="img/logo.png" width="10%" height="10%">
            </header>
                
            <nav>
            <a href="#compilador">IDE e Compilador</a>
            <a href="#introducao">Introducao</a>
            </nav>

            
            <section id="compilador">
            <center>


             <div class="card-container">


              <?php while ($foto = $stmt->fetchObject()): ?>

              <div class="card">
                <img src="imagem.php?id=<?php echo $foto->id ?> Card Image"/>

                <div class="card-content">
                  <h2 class="card-title"><?php echo $foto->nome ?></h2>
                  <p class="card-description">Nativo Windows</p>
                  <a href="https://sourceforge.net/projects/mingw/" class="btn">Download</a>
                </div>
                </div>



           	        	
                    <?php endwhile ?>







           
           
           
           
              </div>
            </center>

            <p>MinGW é uma versão portada para Microsoft Windows do conjunto de ferramentas GNU.</p>

          
        
        
        </section>

                   
          
        

            
            <footer>
            &copy; Linguagem de Programação C.
            </footer>
          </body>
          </html>