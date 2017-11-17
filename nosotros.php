<!DOCTYPE html>
  <html>
    <head>
      <title>UniCol</title>
      <link rel=”Shortcut Icon” href=”img/icono.ico” type=”image/x-icon” />
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <link rel="stylesheet" rel="stylesheet" href="css/materialize.css"/>
    </head>
    <body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.slider').slider();
        });
        $(document).ready(function(){
          $('.parallax').parallax();
        });
      </script>
      <header>
        <nav>               
          <div class="container">
            <div class="row">
              <div class="col s2">
                <a href="inicio.php" class="brand-logo"><img src="img/navbar/sueter.png"></a>               
              </div>
              <div class="col s10">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="productos.php">Productos</a></li>
                  <li><a href="productos.php">Ofertas <span class="new badge">4 Productos </span></a></li>
                  <li><a href="nosotros.php">Nosotros</a></li>
                  <li><a href="Contactenos.html">Contactenos</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <br><br><br><br>
      <div class="row container" align="center">
        <div class="col s12">
          <div class="card-panel teal lighten-2"><h4 class="header" style="color: white" align="center">Nosotros</h4></div>        
        </div>
         <img class="materialboxed" data-caption="Agregar una brece descripcion de la imagen" width="615px" height="500px" src="img/container/logo.jpg">
      </div>

      <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col s4">
              <p align="center"><i class="large material-icons" align="center">person_pin</i></p>
              <h4 align="center">Misión.</h4>
              Somos una empresa que ofrece excelencia y calidad en productos de bordado y estampado garantizando un buen servicio, responsabilidad y eficacia en nuestros productos.
            </div>
            <div class="col s4">
              <p align="center"><i class="large material-icons" align="center">settings</i></p>
              <h4 align="center">Visión</h4>
              En el 2018 ser reconocida como una de las primeras empresas de Bordado y Estampado a nivel Nacional. Demostrando Calidad y Excelencia en nuestros productos. 
            </div>
            <div class="col s4">
              <p align="center"><i class="large material-icons" align="center">assessment</i></p>
              <h4 align="center">Política De Calidad.</h4>
              Lograr la completa satisfacción del cliente con precios competitivos, entregas a tiempo, alta calidad de nuestros productos y teniendo siempre una mejora continua.
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2017 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">Walter Guevara</a>
          </div>
        </div>
      </footer>
    </body>
  </html>