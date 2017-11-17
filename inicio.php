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
        $(document).ready(function(){
          $('.collapsible').collapsible();
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
                  <li><a href="contactenos.html">Contactenos</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <br><br>
      <div class="parallax-container">
        <div class="parallax"><img src="img/slider/numero8.jpg"></div>
      </div>
      <div class="section white">
        <div class="row container">
          <div class="col s12">
            <div class="card-panel teal lighten-2"><h4 class="header" style="color: white" align="center">Productos UniCol</h4></div>        
          </div>
          <div class="col s12">
            <ul class="collapsible popout" data-collapsible="accordion">
              <li>
                <div class="collapsible-header"><i class="material-icons">perm_media</i>Valores Corporativos.</div>
                <div class="collapsible-body">
                  <span>
                    <div class="collection">
                      <a href="#!" class="collection-item">Por la calidad del estampado que es mejorado por maquinas textiles.</a>
                      <a href="#!" class="collection-item">Por el servicio se entregara sellada revisada en la puerta de su casa.</a>
                      <a href="#!" class="collection-item">Por el valor es un precio económico además para su calidad.</a>
                      <a href="#!" class="collection-item">El interés de la empresa es mejorar la calidad de los estampados para así los clientes escojan su propio diseño de estampados.</a>
                    </div>
                  </span>
                </div>
              </li>
            </ul>
          </div>   
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="img/slider/numero1.jpg"></div>
      </div>
      <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container">
          © 2017 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">Walter Guevara
          </a>
          </div>
        </div>
      </footer>
    </body>
  </html>