<?php
// Incluindo arquivo de conexão
require_once('config/conn.php');

// Selecionando fotos
$stmt = $pdo->query('SELECT id, nome, tipo, tamanho, imob FROM fotos');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Salvar imagem no banco de dados com PHP/MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/main.css"/>
</head>

<body>

<div><a href="https://rafaelcouto.com.br/salvar-imagem-no-banco-de-dados-com-php-mysql/"> Site do Código
    
</a>



<div class="container">

    <h1>Salvar imagem no banco de dados com PHP/MySQL</h1>

    <p>
        <a class="btn btn-success" href="cadastro.html">Cadastrar</a>
    </p>

     

    </div>

    <?php while ($foto = $stmt->fetchObject()): ?>
    <div class="col-md-4">
        				<div class="property-wrap ftco-animate">
                        <img src="imagem.php?id=<?php echo $foto->id ?>"/>

                            
        					<a href="detalhe.php?id=2747&t=l" class="img" style="background-image: url(fotos/2747-idpby6a.jpeg);">
        						<div class="imgmarca"></div>
		        				<div class="rent-sale">
		        					<span class="sale">  <strong>Nome:</strong> <?php echo $foto->nome ?> </span>
		        				</div>
	        					<p class="price"><span class="orig-price">  <strong>Tipo:</strong> <?php echo $foto->tipo ?></span></p>
        					</a>
        					<div class="text">
        						<ul class="property_list">
			        				<li><span class="btn btn-primary">  <strong>TIpo:</strong> <?php echo $foto->imob ?> </span></li>
			        				<li><i class="fa fa-bed"></i> 0</li>
			        				<li><i class="fa fa-bath"></i> 0</li>
			        				<li><i class="fa fa-tachometer"></i> 0 m²</li>
	                    			<li><i class="fa fa-car"></i> 0</li>
        						</ul>
        						<h3 style="height: 100px"><a href="detalhe.php?id=2747&t=l">Prédio comercial</a></h3>

        					      					
        					</div>
        				</div>
        			</div>
        		        	
                    <?php endwhile ?>

