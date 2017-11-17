<!DOCTYPE html>
  <html>
    <head>
      <title>UniCol</title>
      <meta charset="utf-8">
      <link rel=”Shortcut Icon” href=”img/icono.ico” type=”image/x-icon” />
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <link rel="stylesheet" rel="stylesheet" href="css/materialize.css"/>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://code.jquery.com/jquery-latest.js"></script>
      <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    </head>
    <body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
          $('.slider').slider();
        });
        $(document).ready(function(){
          $('.modal').modal();
        });
      </script>
      <script type="text/javascript">
        var i1 = 0;
        var i2 = 0;
        var i3 = 0;
        var i4 = 0;
        var i5 = 0;
        var i6 = 0;
        var i7 = 0;
        var i8 = 0;
        var i9 = 0;
        var i10 = 0;
        var i11 = 0;
        var i12 = 0;
        function enviar(k){
          if(k==1){
            i1 = i1 + 1;
            var dataen = 'Producto='+k +'&Valor='+i1;
          }if(k==2){
            i2 = i2 + 1;
            var dataen = 'Producto='+k +'&Valor='+i2;
          }if(k==3){
            i3 = i3 + 1;
            var dataen = 'Producto='+k +'&Valor='+i3;
          }if(k==4){
            i4 = i4 + 1;
            var dataen = 'Producto='+k +'&Valor='+i4;
          }if(k==5){
            i5 = i5 + 1;
            var dataen = 'Producto='+k +'&Valor='+i5;
          }if(k==6){
            i6 = i6 + 1;
            var dataen = 'Producto='+k +'&Valor='+i6;
          }if(k==7){
            i7 = i7 + 1;
            var dataen = 'Producto='+k +'&Valor='+i7;
          }if(k==8){
            i8 = i8 + 1;
            var dataen = 'Producto='+k +'&Valor='+i8;
          }if(k==9){
            i9 = i9 + 1;
            var dataen = 'Producto='+k +'&Valor='+i9;
          }if(k==10){
            i10 = i10 + 1;
            var dataen = 'Producto='+k +'&Valor='+i10;
          }if(k==11){
            i11 = i11 + 1;
            var dataen = 'Producto='+k +'&Valor='+i11;
          }if(k==12){
            i12 = i12 + 1;
            var dataen = 'Producto='+k +'&Valor='+i12;
          }if(k==101){
            k = k -100;
            i1 = i1 - 1;
            var dataen = 'Producto='+k +'&Valor='+i1;
          }if(k==102){
            k = k -100;
            i2 = i2 - 1;
            var dataen = 'Producto='+k +'&Valor='+i2;          
          }if(k==103){
            k = k -100;
            i3 = i3 - 1;
            var dataen = 'Producto='+k +'&Valor='+i3;
          }if(k==104){
            k = k -100;
            i4 = i4 - 1;
            var dataen = 'Producto='+k +'&Valor='+i4;
          }if(k==105){
            k = k -100;
            i5 = i5 - 1;
            var dataen = 'Producto='+k +'&Valor='+i5;
          }if(k==106){
            k = k -100;
            i6 = i6 - 1;
            var dataen = 'Producto='+k +'&Valor='+i6;
          }if(k==107){
            k = k -100;
            i7 = i7 - 1;
            var dataen = 'Producto='+k +'&Valor='+i7;
          }if(k==108){
            k = k -100;
            i8 = i8 - 1;
            var dataen = 'Producto='+k +'&Valor='+i8;
          }if(k==109){
            k = k -100;
            i9 = i9 - 1;
            var dataen = 'Producto='+k +'&Valor='+i9;
          }if(k==110){
            k = k -100;
            i10 = i10 - 1;
            var dataen = 'Producto='+k +'&Valor='+i10;
          }if(k==111){
            k = k -100;
            i11 = i11 - 1;
            var dataen = 'Producto='+k +'&Valor='+i11;
          }if(k==112){
            k = k -100;
            i12 = i12 - 1;
            var dataen = 'Producto='+k +'&Valor='+i12;
          }
          $.ajax({
            type:'POST',
            url:'php/post_productos.php',
            data:dataen,
            success:function(resp){
              $("#respa"+k).html(resp);
              $("#respb"+k).html(resp);
            }
          });
          return false;
        }
        $(document).ready(function() {
            setTimeout(function() {
                $(".bg-success").fadeOut(5000);
            },1000);
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
                  <li><a class="btn-floating btn-large red" href="#modal1"><i class="material-icons right">shopping_cart</i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <br><br><br><br>
      <div class="container">
        <div class="col s12">
          <div class="card-panel teal lighten-2"><h4 class="header" style="color: white" align="center">Productos Disponibles</h4></div>        
        </div>
        <div class="row">
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero1.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 1<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(1);">
                  <input type="hidden" value="producto1" name="producto1" id="producto1"> 
                  <button  id="boton1" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 1 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero2.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 2<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(2);">
                  <input type="hidden" value="producto2" name="producto2" id="producto2"> 
                  <button  id="boton2" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 2 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero3.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 3<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(3);">
                  <input type="hidden" value="producto3" name="producto3" id="producto3"> 
                  <button  id="boton3" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 3 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero4.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 4<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(4);">
                  <input type="hidden" value="producto4" name="producto4" id="producto4"> 
                  <button  id="boton4" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 4 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero5.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 5<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(5);">
                  <input type="hidden" value="producto5" name="producto5" id="producto5"> 
                  <button  id="boton5" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 5 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero6.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 6<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(6);">
                  <input type="hidden" value="producto6" name="producto6" id="producto6"> 
                  <button  id="boton6" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 6 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero7.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 7<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(7);">
                  <input type="hidden" value="producto7" name="producto7" id="producto7"> 
                  <button  id="boton7" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 7 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero8.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 8<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(8);">
                  <input type="hidden" value="producto8" name="producto8" id="producto8"> 
                  <button  id="boton8" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 8 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero9.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 9<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(9);">
                  <input type="hidden" value="producto9" name="producto9" id="producto9"> 
                  <button  id="boton9" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 9 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero10.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 10<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(10);">
                  <input type="hidden" value="producto10" name="producto10" id="producto10"> 
                  <button  id="boton10" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 10 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero11.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 11<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(11);">
                  <input type="hidden" value="producto11" name="producto11" id="producto11"> 
                  <button  id="boton11" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 11 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
          <div class="col s6">
            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="img/slider/numero12.jpg" height="300px" width="400px">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Producto 12<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Descripción<i class="material-icons right">close</i></span>
                <p>Lorem ipsum dolor sit amet</p>
                <form class="col s8" method="POST" onsubmit="return enviar(12);">
                  <input type="hidden" value="producto12" name="producto12" id="producto12"> 
                  <button  id="boton12" class="btn-large" type="submit" name="action" onclick="Materialize.toast('Producto 12 agregado al Carrito', 4000)">Agregar Al Carrito
                    <i class="material-icons right">shopping_cart</i>
                  </button>
                </form>
              </div>
            </div> 
          </div>
        </div> 
        <!--Modal-->
        <div id="modal1" class="modal bottom-sheet">
          <div class="modal-content">
            <div class="row">
              <div class="col s12" align="center">
                <i class="large material-icons">shopping_cart</i>
                <h4>Carrito</h4>
              </div>
            </div>
            <div class="container"> 
                <table class="striped">
                  <thead>
                    <th colspan="2">Imagen</th> 
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Eliminar</th>
                  </thead>
                  <tbody>
                    <tr id="respa1"></tr>
                    <tr id="respa2"></tr>
                    <tr id="respa3"></tr>
                    <tr id="respa4"></tr>
                    <tr id="respa5"></tr>
                    <tr id="respa6"></tr>
                    <tr id="respa7"></tr>
                    <tr id="respa8"></tr>
                    <tr id="respa9"></tr>
                    <tr id="respa10"></tr>
                    <tr id="respa11"></tr>
                    <tr id="respa12"></tr>
                  </tbody>
                </table>
            </div>
          </div>
          <form action="php/post_compra.php" method="GET">
          <div class="modal-footer">
            <input type="hidden" id="respb1"><input type="hidden" id="respb2">
            <input type="hidden" id="respb3"><input type="hidden" id="respb4">
            <input type="hidden" id="respb5"><input type="hidden" id="respb6">
            <input type="hidden" id="respb7"><input type="hidden" id="respb8">
            <input type="hidden" id="respb9"><input type="hidden" id="respb10">
            <input type="hidden" id="respb11"><input type="hidden" id="respb12">
            <button class='modal-action modal-close waves-effect waves-green btn-flat' type='submit' name='submit'>Realizar Compra
                <i class='material-icons right'>shopping_cart</i>
            </button>
          </div>
          </form>
        </div>
      </div>
      
      <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container">
          © 2017 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">Walter Guevara</a>
          </div>
        </div>
      </footer>
    </body>
  </html>