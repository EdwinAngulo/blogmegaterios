<!DOCTYPE html>
<html>
<head>
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
		Inicia Sesion
	</title>
</head>


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
      <a class="navbar-brand" href="../">Blog Megaterios</a>
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
        <li><a href="login.php">Iniciar Sesion</a></li>
        <li><a href="#">Registrarse</a></li>
      </ul>
    </div>
  </div>
</nav>
            </header>
        </div>
    </section>


<div style="width:100%; display: flex;
  justify-content: center;
  align-items: center; ">
<form class="form-horizontal" role="form" action="../php/login.php" method="POST">
<h2>Inicia Sesion</h2>
  <div class="form-group">
    
    <div class="col-lg-10">
      <input type="email" class="form-control" name="email"
             placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    
    <div class="col-lg-10">
      <input type="password" class="form-control" name="pass" 
             placeholder="Contraseña" >
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> No cerrar sesión
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Entrar</button>
    </div>
  </div>
</form>
</div>
</body>
</html>
