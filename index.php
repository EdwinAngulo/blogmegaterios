<?php 
require_once("php/conexion.php");

$registros=$conexion->query("SELECT * FROM articulos INNER JOIN autores ON autores.id_aut=articulos.fk_aut ORDER BY articulos.like_art DESC")->fetchAll(PDO::FETCH_OBJ);
 ?> 
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
	<title>
		Blog Megaterios
	</title>
</head>
<body>
<section class="container">
        <div class="row">
            <header>
                <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Blog Megaterios</a>
    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscador">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="html/login.php">Iniciar Sesion</a></li>
        <li><a href="#">Registrarse</a></li>
      </ul>
    </div>
  </div>
</nav>
            </header>
        </div>
    </section>
     <?php
        foreach($registros as $articulo):
         ?>
<div class="container">
           <div class="row">
         
               <div class="jumbotron">
               <?php echo "<img  height='200'  width='100%' src='data:image/jpeg; base64,".base64_encode($articulo->imagen_art)."'>"; ?>
                  <h1><?php echo $articulo->titulo_art;?></h1>
                    <article> 
                  <p><?php echo $articulo->cont_art;?></p>
                  </article>
                  <p><a class="btn btn-primary btn-lg" role="button" href="html/articulo.php?id=<?php echo $articulo->id_art; ?>">Leer mas</a></p>
                  <div><?php echo "<img width='60' height='60'  src='data:image/jpeg; base64,".base64_encode($articulo->foto_aut)."'>"; ?> 
                  <?php echo $articulo->nom_aut;?>
                    <div align="right">
                     <img src="imagenes/like.png" height='42'  width="42">
                     <?php echo $articulo->like_art;?>
                      <img src="imagenes/dislike.png" height='35'  width="35">
                     <?php echo $articulo->hate_art;?>
                    </div>

                  </div>


            </div>
            
           </div>
       </div>
       <hr />
  <?php

     endforeach;

     ?>




<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>