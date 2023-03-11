<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Login</title>
<!-- bootstrap, scripts, stylesheets include (alexia, 11/03/2023) -->
<?php include('style.php'); ?>
</head>
<main class="form-signin w-100 m-auto">
<body class="text-center">

  <?php if ($message) { echo "<p>$message</p>"; } ?>
  <form method="post">
<img class="mb-4" src="glitty.png" alt="login">
   <h1 class="h3 mb-3 fw-normal">Login</h1>
    <div class="form-floating">
  <input type="text" class="form-control" id="floatingInput" placaeholder="usuaria/o" name="username">
  <label for="floatingInput">Usuaria/o</label>
</div>
<div class="form-floating">   
 <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
    <label for="floatingPassword">Password</label>
</div>
<input type="submit" class="w-100 btn btn-primary" name="login" value="Glitty Login">
<p class="mt-5 mb-3 text-muted">Glitty v1.5.1 by Alexia Rivera</p>
  </form>
  <p>No account yet? <a href="register.php">Create one</a></p>
</main>
</body>
</html>
