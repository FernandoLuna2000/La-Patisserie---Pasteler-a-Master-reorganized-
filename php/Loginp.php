<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="../css/EstiloAgragar.css" rel="stylesheet" href="/css/master.css">
    <link rel="shortcut icon" type="../Images/logo_patisseria.png" href="../Images/logo_patisseria.png">
    <title>Login</title>
  </head>
  <body>
    <main class="col-sm-12 row justify-content-center h-100">
      <header class="align-self-center  text-center">
        <img src="../Images/logo_patisseria.png" width="250px" position="center">
        <h2>Acceso</h2>
      </header>
      <div class="container col-sm-12 row justify-content-center h-100">
        <div class="col-sm-4 row justify-content-center h-100text-center">
          <form action="index.php" method="post" enctype="multipart/form-data"  class="col-sm-6 align-self-center  text-center" >
            <?php

                 if(isset($errorLogin)){
                     echo $errorLogin;
                 }

            ?>
            <div class="form-group">
              <label>Usuario</label>
              <input type="user" class="form-control text-center" name="username">
              </div>
            <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control text-center" name="password">
            </div>
            <small class="form-text text-muted">Nunca comparta su contraseña y usuario con ninguna otra persona</small>
            <div class="form-group form-check"></div>
            <button type="submit" class="btn btn-secondary">Submit</button>
            <a type="button" class="btn btn-danger" name="button" href="../Pagina Principal.html">Salir</a>
          </form>
        </div>
      </div>
    </main>
      <script src="js/Jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
