<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sate Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/Index.css') }}">
  </head>
  <body>
    <header class="container.fluid d-flex">
      <nav  class="navbar navbar-dark navbar-expand-lg  bg-dark d-flex justify-content-between sticky-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       <span>  Inicio</span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul id="asd" class="navbar-nav mr-auto d-flex justify-content-between">
            <div id="navegacion" class="row">
         <div class="col-1">
         <li class="nav-item">
           <a class="navbar-brand" href="index.php">Inicio</a>
         </li>
       </div>
       <div class="col-2 col-lg-1">
         <li class="nav-item">
           <a class="nav-link" href="productos.php">Productos</a>
         </li>
         </div>
         <div class="col-2">
         <li class="nav-item">
           <a class="nav-link" href="#">Acerca de Nosotros</a>
         </li>
         </div>
         <div class="col-5 col-lg-6">
         <li id="hola" class="nav-item dropdown">
           <a id="hola1"class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Contactanos
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="contacto.php">Contacto</a>
             <a class="dropdown-item" href="preguntas.php">Preguntas más frecuentes</a>
             <a id="Facebook" target="_blank" class="dropdown-item fab fa-facebook-square" href="https://Facebook.com">Nuestro Facebook</a>
             <a id="instagram" target="_blank" class="dropdown-item fab fa-instagram" href="https://Instagram.com">Nuestro Instagram</a>
             <a id="Twitter" class="dropdown-item fab fa-twitter" href="https://Twitter.com">Nuestro Twitter</a>
           </div>
           </div>
           <div class="col-1">
         </li>
         <li class="nav-item">
           <a class="nav-link" href="login.php">Log in</a>
         </li>
         </div>
         <div class="col-1">
         <li class="nav-item">
           <a class="nav-link" href="registro1.php">Sign Up</a>
         </li>
         </div>
       </ul>
      </div>
      </nav>
      </div>
   </header>
  </body>
</html>
