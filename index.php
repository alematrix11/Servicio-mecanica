<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <title>Super Frenos Santa Fe</title>
    
    <meta name="keywords" content="mecanica, mecanico, servicio, taller, frenos, ciudad, SantaFe, Santa, Fe, atencion, revision, solucion, presupuesto">
    
    <meta name="description" content="Si estas teniendo problemas con tu auto, y buscas una solucion de mecanica especializada en reparaciones de frenos y embragues, te ofrecemos una buena atencion y reparación rapida!">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    
    <!--Import estilos.css-->
    <link rel="stylesheet" type="text/css" href="estilos.css">
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    
    <!--CDN de MediaQuery-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>

</head>

<body class="black">
    
    <!--Comentario para realizar pruebas con git-->
    
    <!-- **** Landing Page de publicitaria desarrolada por Alejandro Iorlano **** --> 
    <!-- **** Contacto  ale.iorlano@gmail.com **** -->
    
    
    <!--Diseño de menu adaptable a tablet, netbook, notbook y computadoras de escritorio-->
    
    <!--Mostrar para tableta y superior-->
    
    <header class="show-on-medium-and-up">
    <section class="wrapper">
    <nav>
        <ul class="opciones-menu">
            <li><a href="#serMecanico" class="servicio">Servicio mecanico</a></li> 
            <li><a href="#conTrabajos" class="consulta">Consultas de trabajos</a></li>
            <li><a href="#envConsulta" class="escribir">Escribir consulta</a></li>
        </ul>
    </nav>
    </section>
    </header>
    
    <!--Diseño de menu adaptable version de prueba-->
    
    <!--Mostrar solo para móviles-->
    
    <!--Oculto para tableta y arriba-->
    
    <header class="show-on-small hide-on-med-and-up">
    <section class="wrapper">
    <nav class="center-align">
        <ul class="opciones-menu">
            <li style="margin: auto;"><a href="#serMecanicoMovil" class="servicio">Servicio mecanico</a></li>
        </ul>
    </nav>
       
    <nav class="center-align">
        <ul class="opciones-menu">
         <li style="margin: auto;"><a href="#conTrabajosMovil" class="consulta">Consultas de trabajos</a></li>
        </ul>
    </nav>
        
    <nav class="center-align">
        <ul class="opciones-menu">
         <li style="margin: auto;"><a href="#envConsultaMovil" class="escribir">Escribir consulta</a></li>
        </ul>
    </nav>
    </section>
        
    </header>
    
    
    <!--Contenido-->
    
    <div class="hide-on-med-and-up" style="height: 8%;" id="serMecanicoMovil"></div>
    
    <div class="contenedor" id="serMecanico">
        <div class="row">
           <div class="container">
                
                <div class="hide-on-large-only">
                    <br><br>
                </div>

                <div class="col l12 m12 s12 black-text indigo transparencia contenedorServicio">
                    <h1>Servicio mecanico</h1>
                    
                    
                   
                    
                    <h2 class="white-text tamaniotexth2">Servicio mecanico en la ciudad de Santa Fe y alrrededores</h2>     
                    <h2 class="white-text tamaniotexth2" id="conTrabajos">Reparaciones en general de frenos</h2>
                    
                        
                </div>
               
                <div class="col l12 m12 s12 black-text orange transparencia"  id="conTrabajosMovil">
                    <h1 class="configuracion-titulos">Consultas por trabajos</h1>
                    <h2 class="white-text tamaniotexth2">Envie su consulta</h2>
                    <h2 class="white-text tamaniotexth2">Llame para consultar su presupuesto</h2>
                    <div id="envConsultaMovil"></div>
                    <button class="btn btn-large waves-effect" type="submit" onclick="M.toast({html: 'Realizar llamada telefonica al: 342-4383504', classes: 'light-green accent-4'})">Llamar<i class="material-icons right">call</i></button>
                    <div id="envConsulta"></div>
                    <br><br>
                </div>
                
                
                <div class="col l12 m12 s12 black-text blue accent-4 contenedorFormulario">
                    
                    <h3 class="titulo-consulta">Complete para realizar su consulta</h3>
                    
                    <div class="container white formularioContenedor">
                    
                    <!--Formulario de contacto-->
                    <form class="col s12" action="enviar-consulta.php" method="post">
                      <div class="row">
                            <br>
                            <div class="input-field col s12 ">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="email" name="email" type="email" class="validate" required>
                                <label for="email">Ingrese aquí su correo:</label>
                                <span class="helper-text" data-error="Ingrese nuevamente su direccion de correo" data-success="Ingreso su direccion de correo correctamente"></span>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">phone</i>
                                <input id="celular" name="celular" type="tel" class="validate" required>
                                <label for="celular">Ingrese aquí su numero de celular:</label>
                                <span class="helper-text" data-error="Ingrese nuevamente su numero" data-success="Ingreso su celular correctamente"></span>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">create</i>
                                <textarea id="consulta" name="consulta" class="materialize-textarea"></textarea>
                                <label for="consulta">Escriba su consulta aquí</label>
                            </div>
                            <button class="btn waves-effect waves-light boton-consulta" type="submit" name="action" id="boton-consulta">Enviar consulta
                                <i class="material-icons right">send</i>
                            </button> 
                        </div>
                    </form>
                    
                    </div>
                    
                </div>
            
            </div>
        </div>
    </div>
            
            
            <!--Sesion del carrusel-->
    
            <h2 class="texto-carrusel">Super Frenos Santa Fe siempre te brinda la mejores soluciones para tu autómovil o camioneta</h2>
            
            <div class="container section grey lighten-2 z-depth-2 hoverable hide-on-large-only">
                <div class="row">
                    <div class=" col l12 m12 s12">
                         
                        <div class="carousel carousel-slider center">
                           
                           <div class="carousel-item red white-text imagen-slider" href="#one!">
                                <h4>Recambio de pastillas de frenos de discos</h4>
                                <img src="imagenes/recambio-pastillas-frenos.jpg" alt="Pastillas de frenos" class="valign-wrapper responsive-img">
                            </div>
                           
                            <div class="carousel-item red white-text imagen-slider" href="#two!">
                                <h4>Recambio y reparacion de mordazas de frenos</h4>
                                <img src="imagenes/retificacion-discos-frenos.jpg" alt="Mordadaza de frenos" class="valign-wrapper responsive-img">
                            </div>
                            
                            <div class="carousel-item red white-text imagen-slider" href="#three!">
                                <h4>Recambio y reparacion de bombas de frenos</h4>
                                <img src="imagenes/bomba_de_freno.jpg" alt="Reparacion de bombas de frenos" class="valign-wrapper responsive-img">
                            </div>
                            
                         
                            <div class="carousel-item red white-text imagen-slider" href="#three!">
                                <h4>Retificacion y recambio de discos de frenos</h4>
                                <img src="imagenes/Disco%20y%20mordaza%20de%20frenos.jpg" class="valign-wrapper responsive-img">
                            </div>
                            
                        </div>
                         
                    </div> 
                </div>
            </div>
            
            <br>
            
            <div class="container white hide-on-small-only">
              
            <!--Targetas con los trabajos de mecanica de frenos-->
            
            <!--Targeta de recambio y reparacion de bombas de frenos-->
                        
                <div class="row">
                   <div class="col l4 m12 s12">
                        <div class="card purple darken-4">
                            <div class="card-content white-text">
                    
                                <h2 class="card-title">Recambio y reparacion bombas de frenos</h2>
                        
                                <span>Se colocan nuevas y tambien se reparan bombas de frenos en autos y camionetas, se hacen revisiones para ver el estado de las mismas, y se colocan nuevas bombas si es necesario</span>
                                
                                <br><br>
                                
                                <div class="card-image">
                                    <img src="imagenes/bomba_de_freno.jpg" alt="Reparacion de bombas de frenos" class="valign-wrapper responsive-img">
                                </div>
                                
                            </div>
                            
                            <div class="card-action">
                                <a href="#conTrabajos">Consultar</a>
                                <a href="#contacto">Llamar</a>
                            </div>
                            
                        </div>
                    </div>
               
                
                <!--Targeta de recambio de pastillas de discos de frenos-->
                
                
                   <div class="col l4 m12 s12">
                        <div class="card purple darken-4">
                            <div class="card-content white-text">
                    
                                <h2 class="card-title">Recambio de pastillas de frenos</h2>
                        
                                <span>Se realizan cambios de pastillas de frenos en autos y camionetas, se hacen revisiones para ver el estado de las mismas, y se colocan nuevas pastillas si es necesario</span>
                                
                                <br><br>
                                
                                <div class="card-image">
                                    <img src="imagenes/recambio-pastillas-frenos.jpg" alt="Pastillas de frenos" class="valign-wrapper responsive-img">
                                </div>
                                
                            </div>
                            
                            <div class="card-action">
                                <a href="#conTrabajos">Consultar</a>
                                <a href="#contacto">Llamar</a>
                            </div>
                            
                        </div>
                    </div>
                
            
                <!--Recambio y retificacion de discos de frenos-->
                        
                
                   <div class="col l4 m12 s12">
                        <div class="card purple darken-4">
                            <div class="card-content white-text">
                    
                                <h2 class="card-title">Recambio y reparacion de discos de frenos</h2>
                        
                                <span>Se colocan nuevos y tambien se reparan discos de frenos en autos y camionetas, se hacen revisiones para ver el estado de los mismos, y se colocan nuevos discos si es necesario</span>
                                
                                <br><br>
                                
                                <div class="card-image">
                                    <img src="imagenes/Disco%20y%20mordaza%20de%20frenos.jpg" class="valign-wrapper responsive-img">
                                </div>
                                
                            </div>
                            
                            <div class="card-action">
                                <a href="#conTrabajos">Consultar</a>
                                <a href="#contacto">Llamar</a>
                            </div>
                            
                        </div>
                    </div>
               
            
                <!--Targeta de recambio y reparacion de mordazas de frenos-->
            
                
                   <div class="col l4 m12 s12">
                        <div class="card purple darken-4">
                            <div class="card-content white-text">
                    
                                <h2 class="card-title">Recambio y reparacion de mordazas de frenos</h2>
                        
                                <span>Se colocan nuevas y tambien se reparan mordazas de frenos en autos y camionetas, se hacen revisiones para ver el estado de las mismas, y se colocan nuevas mordazas si es necesario</span>
                                
                                <br><br>
                                
                                <div class="card-image">
                                    <img src="imagenes/retificacion-discos-frenos.jpg" alt="Mordadaza de frenos" class="valign-wrapper responsive-img">
                                </div>
                                
                            </div>
                            
                            <div class="card-action">
                                <a href="#conTrabajos">Consultar</a>
                                <a href="#contacto">Llamar</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                
                
            </div>
            
    
    <!--Pie de pagina-->
    
    <footer class="black" id="contacto">
    
        <div class="container">
        <div class="row">
            <div class="col l6 m6 s12">
                <ul>
                    <li class="white-text">Celular (Opcion1): 3424383504</li>
                </ul>
                <ul>
                    <li class="white-text">Celular (Opcion2): 3425334029</li>
                </ul>
                <ul>
                    <li class="white-text">Provincia de Santa Fe, Ciudad de Santa Fe</li>
                </ul>
            </div>
            
            <div class="col l6 m6 s12">
                <p class="white-text">&copy; Todos los derechos reservados Super Frenos Santa Fe</p>
            </div>
        </div>
        </div>
        
    </footer>
    
    
    <!--Inicializador del carousel-->
     
    <script>
        
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, {
            duration: 400,
            dist: -50,
            shift: 20,
            fullwidth: true,
            indicators: true,
            
        });
                
            autoplay();
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 4500);
            }
         
    });
        
    </script>
    
    <!--Configuracion del mensaje alerta del formulario-->
    
    <script>
    
        M.toast({html: 'I am a toast!', classes: 'blue', displayLength:'14000', timeRemaining'14000'})
    
    </script>
    
    
    <!--Configuracion dezplazamiento lento-->
    
    <script>
        $(document).ready(function() {
            $('a[href^="#"]').click(function() {
            var destino = $(this.hash);
            if (destino.length == 0) {
            destino = $('a[name="' + this.hash.substr(1) + '"]');
            }
            if (destino.length == 0) {
            destino = $('html');
            }
            $('html, body').animate({ scrollTop: destino.offset().top }, 800);
            return false;
            });
        });
    </script>
    
    <!--Import jQuery-->
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
</body>

</html>