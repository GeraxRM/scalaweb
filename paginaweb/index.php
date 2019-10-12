<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="/SitioWeb/estilos.css">
  <link rel="stylesheet" href="/SitioWeb/css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="owl/owl.carousel.min.css">
  <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>


<body>

<header>

  <?php
  require_once 'navbar.php';
?>

<div class="contenedor">
 <div class="contenedor-titulo">
   <div class="titulo">
     <h1>TODO EMPIEZAss CON</h1>
     <h2>UNA "IDEA"</h2>
     <!-- <a>VER MIS TRABAJOS</a> -->
    </div>
 </div>
</div>
</header>

<main>
<section id="about">
  <div class="contenedor">
    <h3>Scala Negocios</h3>
    <div class="contenido">
      <div class="about-img"><img src="imagenes/laptop.jpg"></div>
      <div class="about-text">
        <p>En Scala nos dedicamos a diseñar estrategias de nogocios a la medida. Nuestros servicios se basan en la mejora continua de los sectores socio económicos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="servicios">
    <div class="contenedor">
      <h3>Servicios</h3>
      <div class="contenedor-servicios">

        <div class="servicio violeta">
          <h4>Diseño web</h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          <div class="icono"><img src="imagenes/monitor.png" alt=""></div>
          <img src="imagenes/waves1.png" class="waves" alt="waves">
      </div>

      <div class="servicio celeste">
        <h4>Responsive Design</h4>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        <div class="icono"><img src="imagenes/monitor.png" alt=""></div>
        <img src="imagenes/waves1.png" class="waves" alt="waves">
    </div>

    <div class="servicio violeta">
      <h4>SEO</h4>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
      <div class="icono"><img src="imagenes/monitor.png" alt=""></div>
      <img src="imagenes/waves1.png" class="waves" alt="waves">
  </div>

  <div class="servicio celeste">
    <h4>Autoadministrable</h4>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
    <div class="icono"><img src="imagenes/monitor.png" alt=""></div>
    <img src="imagenes/waves1.png" class="waves" alt="waves">
</div>

<div class="servicio violeta">
  <h4>Mantenimiento</h4>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
  <div class="icono"><img src="imagenes/monitor.png" alt=""></div>
  <img src="imagenes/waves1.png" class="waves" alt="waves">
</div>

<div class="servicio celeste">
  <h4>Diseño web</h4>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
  <div class="icono"><img src="imagenes/monitor.png" alt=""></div>
  <img src="imagenes/waves1.png" class="waves" alt="waves">
</div>

      </div>
    </div>
  </section>

<section id="trabajos">
  <div class="contenedor">
    <h3>Mis Trabajos</h3>
    <div class="contenedor-trabajos owl-carousel owl-theme">
      <div class="trabajo item">
        <a href="https://www.facebook.com" target="_blank"><img src="imagenes/ima1.png" alt="Wodin Digital"></a>
        <p>Wodin Digital</p>
      </div>
      <div class="trabajo item">
        <a href="https://www.facebook.com" target="_blank"><img src="imagenes/ima2.jpg" alt="Wodin Digital"></a>
        <p>Har Hamoria</p>
      </div>
      <div class="trabajo item">
        <a href="https://www.facebook.com" target="_blank"><img src="imagenes/ima3.jpg" alt="The Cookie Way"></a>
        <p>Miumis</p>
      </div>
      <div class="trabajo item">
        <a href="https://www.facebook.com" target="_blank"><img src="imagenes/ima4.jpg" alt="The Cookie Way"></a>
        <p>The Cookie Way</p>
      </div>
      <div class="trabajo item">
        <a href="https://www.facebook.com" target="_blank"><img src="imagenes/ima5.jpg" alt="The Cookie Way"></a>
        <p>Sofia Zimerman</p>
      </div>
    </div>
  </div>
</secton>
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
      margin:10,
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
              items:5
          }
      }
  })
});

</script>

</body>
</html>
