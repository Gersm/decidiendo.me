<!doctype html>
<html lang="es">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Decidiendo.me</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    

    <!-- Le fav and touch icons -->
    <link rel="icon" type="image/png" href="assets/ico/favicon.png">

</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar">

  <!-- Navbar
  ================================================== -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="brand" href="#">Decidiendo.me</a> -->
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li class="">
              <a href="#servicios">Servicios</a>
            </li>
            <li class="">
              <a href="#">Empezar</a>
            </li>
            <li class="">
              <a href="#">Contactenos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<div class="jumbotron masthead">
  <div class="container">
    <p>No sabes que estudiar?</p>
    <h1>Decidiendo.me</h1>
    <p>Es la Solucion!!!</p>
    <form action="index.php" method="post">
      <label>¿Deseas recibir información</label>
      <label>y ser el primero en enterarte del lanzamiento?</label>
      <input type="text" name="email" placeholder="Direccion de Correo Electronico" required />
      <br />
      <input type="submit" value="Registrarse!" class="btn btn-primary btn-large" />
    </form>
    <ul class="masthead-links">
      <!-- <li>
        <a href="#">Daniel Director</a>
      </li> -->
      <li>
        <a href="#">Startup project</a>
      </li>
      <li>
        Version 0.2
      </li>
    </ul>
  </div>
</div>

<div class="container">

  <div class="marketing">

    <p class="marketing-byline" style="position:relative;bottom:-50px;">No sabes que estudiar? pare de sufrir!.</p>
    <h1>Decidiendo.me</h1>
    <p class="marketing-byline">Te ofrece:</p>
    <div class="row-fluid">
      <div class="span4">
        <img class="marketing-img" src="assets/img/test.jpg">
        <h2>Orientacion Vocacional.</h2>
        <p>Te ayudaremos a que conoscas tus intereses, tu personalidad tus cualidades entre otros...</p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="assets/img/games.png">
        <h2>Entretenimiento.</h2>
        <p>Los test de orientacion vocacional, son aburridos. Aqui te ofrecemos algo distinto, mientras usted va jugando, nosotros vamos evaluando sus marcadires, y al final le daremos el resultado.</p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="assets/img/u.jpg">
        <h2>Recomendaciones.</h2>
        <p>Universidades recomendadas para apostular, estudiar y seguir con tu desarrollo academico.</p>
      </div>
    </div>

  </div>
</div>


<footer class="footer">
  <div class="container">
    <p>Designed and built with all the love in the world by Gersom Alaja</p>
    <p>(e)Copyleft Code licensed GNU</p>
  </div>
</footer>
    
<!-- Le javascript
    ==================================================
    Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="../../platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>
    
</body>
</html>




<?php
if (isset($_POST["email"])) {

  $to      = "informacion@decidiendo.me";
  $subject = "decidiendo.me";
  $message = "Detalles del formulario de Registro: \n\n";
  $message .= "E-mail: " . $_POST["email"];

  mail($to, $subject, $message);

  print("<script type='text/javascript'>alert('Registro Completado Exitosamente...!');</script>");
}
?>