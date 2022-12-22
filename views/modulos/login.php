<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Acceso para edición de tarjetas">
    <meta name="author" content="Marcos">
    <title>Login</title>

<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/login.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form>
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="ingUsuario" placeholder="nombre@ejemplo.com" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="ingPassword" placeholder="Password" required>
      <label for="floatingPassword">Contraseña</label>
    </div>

    <button class="btn btn-lg btn-primary" type="submit">Ingresar</button>
    <button class="btn btn-lg btn-secondary" type="submit">Cancelar</button>

    <?php
      require_once "../../controllers/users.controller.php";
      $login = new ControllerUsers();
      $login -> ctrLoginUser();
    ?>

  </form>
</main>

  </body>
</html>
