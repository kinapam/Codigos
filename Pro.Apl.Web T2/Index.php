<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap(min)II.css">
    <link rel="stylesheet" href="Bootstrap(min).css">
    <link rel="stylesheet" href="Css propio.css">
    <!--<script src="Js propio.js"></script>-->
    <?php $ico="ico.ico";?> <!--Aqui comprendi el funcionamiento generando una varible del icono para llamarla-->
    <link rel="shortcut icon" <?php echo "href='".$ico."'/";?>>
    <title>∃xist</title>
  </head>
  <body>

<?php 
$Pa1 ="Uno de los mayores problemas que tenemos en la sociedad actual es la gran cantidad de opciones que tenemos para tomar    durante nuestra vida en cada pequeña oportunidad hay incontables opciones, como nunca antes en la historia de la humanidad la tecnología nos ha dado incontables deportes, oficios, profesiones, pasatiempos al alcance de la mano, haciendo que aspectos de la vida sean muy in  teresantes y a veces insatisfactorios por elecciones que solo causan estrés";
$Pa2= "Como empresa te acompañaremos en cada aspecto de la vida en que tú quieras, te ayudaremos con una serie de servicios pensados en tu salud, entretención, desarrollo personal, profesional y sobre todo para aliviar todo el estrés que sea posible";
$Pa3= "Para esto hemos creado un ecosistema de inteligencias artificiales especializadas en ayudarte a tomar toda decisión que te causen o pueda causar estrés, este ecosistema esta respaldado en tecnología desarrollada por nosotros, las II.AA. cada una con una especialización distinta con su propia capacidad de procesamiento cuántico al servicio de nuestros clientes";
$Pa4= "Nuestra visión es que la tecnología debe estar al servicio de quien así lo requiera, tomar lo que mejor hace una maquina y aprovechar esto. ¿Que es lo que hace mejor? considerar variables, calcular y obtener resultados, estos resultados son entregados como opciones para que decidas, esto lo realizamos a través de una serie de algoritmos en nuestras II.AA. donde nuestro primer pilar es la seguridad de tu información y requerimientos, la confidencialidad es la primera de nuestras preocupaciones por lo mismo es el primer punto en nuestro contrato.";
$Pa5="¿Como te entregamos este servicio, cuando y donde? eso lo decides tu nuestro ecosistema esta presente para celulares, relojes inteligentes, Tablet en todas las marcas y con todos los sistemas operativos con que actualmente tengan una participación de mercado mayor al 10%. La gran duda ¿Que hace exactamente nuestra compañía? lo primero es definir que es lo que necesitas, tus meta a alcanzar con cada mayor detalle que entregues mas exacta y precisas serán las sugerencias que te entreguemos, si indicas que quieres perder el 20% de tu masa corporal en 2 meses: la App te solicitara sacar fotos de tu refrigerador con cada comida para darte una receta que se ajusten a tu solicitud, aprender Chino Mandarín lo antes posible: a través de distintas preguntas te indicara, en base a tus horarios y disponibilidad en cuanto tiempo podrías lograrlo siguiendo los consejos, te dará las opciones de donde puedas aprender, en que formato de enseñanza, y donde encontrarla, convertirte en un líder: según el análisis de tus habilidades actuales, cuantificando fortalezas y debilidades que debes trabajar, te dirá si necesitas algún tipo de coach y donde encontrarlo, generar confianza: te dará consejos de comportamiento así como analizar que hábitos generar, si requerirá apoyo de algún especialista. Para esto no hay limites quieres que te de las opciones que te permitan vivir 120 años, entonces lo haremos, pero no es magia, quieres pedir convertirte en la persona mas rápida de 100 metros planos, entonces nuestro ecosistema te solicitara resultados de exámenes médicos para indicarte si es posible o n y cual podría ser tu mejor marca con sus consejos, ver una película, según tus gustos, carteleras disponibles y horarios te dará la mejor opción, quieres limitar el espacio geográfico, una cadena en específico, un formato de exhibición todo podrá ser calculado";
?>

    <div class="container">
      <div class="titulo">
        <h1>∃xist</h1>
        <h5>Una compañia para toda tu vida</h5>
      </div>
      
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Made by someone</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
          </ul>
        </div>
      </nav>

      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Conocenos mas</button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Donde estamos</a>
          <a class="dropdown-item" href="#">Quienes somos</a>
          <a class="dropdown-item" href="#">Quieres trabajar con nosotros</a>
        </div>
      </div>

    <!--<?php
    $directrio = "./*.jpg";
    $images = glob($directrio);
    foreach ($images as $image){
        echo '<img src="'.$image.'" alt="imagen" /><br/>';
    }
    ?>-->

      <div class="Sec1">
        <p class="Pa1"><?php echo $Pa1?></p>
        <p class="Pa2"><?php echo $Pa2?></p>

        <div class="row">
          <div class="col-md-3">
            <a href="Estress.jpg" target="_blank">
              <img src="Estress.jpg" alt="stres" class="rounded-circle" style="width:100%">
            </a>
          </div>
        </div>
        <p class="Pa3"><?php echo $Pa3?></p>
        <div class="row">
          <div class="col-md-4">
            <a href="Servidores.jpg" target="_blank">
              <img src="Servidores.jpg" alt="Servidores" class="rounded" style="width:100%">
            </a>
          </div>
        </div>
      </div>

      <div class="Sec2">
        <p class="Pa4"><?php echo $Pa4?></p>
        <div class="row">
          <div class="col-md-4">
            <a href="Principios.jpg" target="_blank">
              <img src="Principios.jpg" alt="Principios" class="rounded-circle" style="width:100%">
            </a>
          </div>
          <div class="col-md-4">
            <a href="Data.jpg" target="_blank">
              <img src="Data.jpg" alt="Data" class="roundedrounded-circle" style="width:100%">
            </a>
          </div>
        </div>
        <p class="Pa5"><?php echo $Pa5?></p>
        <div class="row">
          <div class="col-md-4">
            <a href="Horarios.jpg" target="_blank">
              <img src="Horarios.jpg" alt="Horarios" class="rounded" style="width:100%">
            </a>
          </div>
          <div class="col-md-4">
            <a href="Alimentación.jpg" target="_blank">
              <img src="Alimentación.jpg" alt="Alimentación" class="rounded" style="width:100%">
            </a>
          </div>
          <div class="col-md-4">
            <a href="Lider.jpg" target="_blank">
              <img src="Lider.jpg" alt="Lider" class="rounded" style="width:100%">
            </a>
          </div>
        </div>
      </div>

      <div class="Sec3">
        <div>
          Foto de <a href="https://unsplash.com/@freestocks?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">freestocks</a> en <a href="https://unsplash.com/es/s/fotos/calendario-inteligente?license=free&utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText" target="_blank">Unsplash</a>
        </div>
        <div class="container">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Presi.jpg" alt="Slide1" class="img-thumbnail" width="1100" height="500">
                  <div class="carousel-caption">
                    <h3>CEO</h3>
                    <p>Peter Clanswark</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="Desarrollo.jpg" alt="Slide2" class="img-thumbnail" width="1100" height="500">
                  <div class="carousel-caption">
                    <h3>Desarrollo de II.AA.</h3>
                    <p>Elizabeth Kirki</p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="Cliente.jpg" alt="Slide3" class="img-thumbnail" width="1100" height="500">
                  <div class="carousel-caption">
                    <h3>Clientes y managment personas</h3>
                    <p>Carl Pontter</p>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p class="F1">∃xist una compañia para toda tu vida</p>
      <p class="F2">Creado por Diaz Sepulved, Esteban</p>
    </div>
    <script src="popper.min.js"></script>
    <script src="jquery-slim.min.js"></script>
    <script src="bundle.min.js"></script>
    <script src="Bootstra(min).js"></script>
  </body>
</html>