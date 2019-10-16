<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="/cssC/estilos.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700|Roboto:300,400,700&display=swap"
      rel="stylesheet">
  <script src="https://kit.fontawesome.com/d00b1f9a63.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

</head>


<body>

<header id="servicio">

  <?php
  require_once 'navbar.php';
?>

<div class="contenedor">
 <div class="contenedor-servicio">
   <div class="titulo-servicio">
     <h1>Servicios</h1>
     <p>Nos dedicamos a diseñar estrategias de negocios a la medida, basándonos en el análisis del entorno.</p>
    </div>
 </div>
</div>
</header>

<main>

  <section id="ejemplos-servicios">
<div class="contenedor">
    <div class="contenedor" id="animate">
      <div class="contenedor-info1">
          <div class="info1">
              <i class="fas fa-chess"></i>
              <h3>PLANEACIÓN</h3>
              <h3>ESTRATEGICA</h3>
          </div>
          <div class="info1">
              <i class="fas fa-user-edit"></i>
              <h3>CAPACITACIONES</h3>
          </div>

      </div>
      <div class="contenedor-info1">
          <div class="info2">
              <i class="fas fa-cog"></i>
              <h3>INGENIERÍA Y CALIDAD</h3>
          </div>
          <div class="info2">
              <i class="fas fa-briefcase"></i>
              <h3>PLANES DE NEGOCIOS</h3>
              <h3>Y PROYECTOS</h3>
          </div>
      </div>
      <div class="contenedor-info1">
          <div class="info2">
            <i class="fas fa-mail-bulk"></i>
              <h3>MERCADOTECNIA</h3>
          </div>
      </div>
  </div>
  </div>
  </section>

</main>

<footer>
    <?php
    require_once 'footer.php';
?>
</footer>

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="owl/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
      loop:true,
      autoplay:true,
      autoplayTimeout:3000,
      autoplayHoverPause:true,
      margin:50,
      nav:true,
      merge:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:3
          }
      }
  })
});

</script>
</body>


</html>
