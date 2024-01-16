<!DOCTYPE html>
<html>
<!--Titulo de página y librerías-->
    <head>
        <title>Llaves para Laboratorio en Mexico</title>
        <link rel="icon" type="image/x-icon" href="navbar/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/landing.css">
        <link rel="stylesheet" href="css/navegacion.css">
        <script src="https://kit.fontawesome.com/2bfe246e0a.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
<body>
<!--Barra superior (contiene el logo, la barra de busuqeda y los botones de cotizar y whatsapp)-->
<?php include 'navbar/navbar.php';?>
<!-- Para oscurecer la página cuando se hace hover en la barra de navegación-->
<div class ="header1">
    <img src="fondo.png" alt="fondo" style="width:100%;">
    <div class="contenidoheader">
        <div class="textoheader1">La mayor variedad de llaves para laboratorio online en México</div>
        <div class="textoheader2">Elige ahora entre más de 100 llaves y válvulas</div>
        <div class="botonesHdr">
            <div class="botonCtzr">
                <a href="checkout/">¡Cotiza Ya!</a>
            </div>
            <a href="paginas/blog/">¿Cómo saber que llave es la que necesita tu laboratorio?</a>
        </div>
    </div>
</div>
<!--Contenido principal de la página-->
<main>
<h1>
    ¿Te ha frustrado esto?
</h1>
<h2>
    <li>No encontrar la llave que necesitas</li>
    <li>No encontrar buena calidad</li>
    <li>Envios caros</li>
</h2>
<h3>
    En Llaves para Laboratorio tenemos la llave que se ajusta perfectamente a las necesidades de tu laboratorio.
    <div class="botonCtzr">
        <br>
        <br>
        <a href="checkout/">¡Cotiza Ya!</a>
    </div>
</h3>
<br>
<div class="grid-container">
    <div class="grid-item">
      <img src="shelf.png" alt="Image 1">
      <h4>Gran Variedad de Llaves</h4>
      <h5>Contamos con más de 100 modelos de llaves y válvulas.</h5>
    </div>
    <div class="grid-item">
      <img src="quality.png" alt="Image 2">
      <h4>Calidad Garantizada</h4>
      <h5>Contamos con garantía en cada una de las llaves y válvulas que manejamos.</h5>
    </div>
    <div class="grid-item">
      <img src="mouse.png" alt="Image 3">
      <h4>Compra fácilmente</h4>
      <h5>Con tan poco como cuatro clicks puedes llevarte las llaves que necesites.</h5>
    </div>
  </div>
<br>
<div class="guia">
    <p>En Llaves para Laboratorio sabemos que quieres tener un laboratorio de primera.
        Para lograr eso necesitas la mejor herramienta.
        El problema es la falta de variedad que te hace sentir que te conformas con menos. 
        Nosotros creemos que hay una llave o válvula para todas sus necesidades.
        Entendemos la frustracion de no encontrar lo qu necesitas, por lo cual nosotros tenemos la más amplia selección de llaves y válvulas para laboratorio online en México.
        Así es como lo hacemos: 1. Te ayudamos a seleccionar la llave que necesitas.
        2. Cotizamos 3. Enviamos.
        Así que, dale click a cotizar. Y mientras tanto, ¿por qué no lees nuestro blog?. 
        Para que puedas dejar de sentir que te conformas. Y en lugar puedas tener tu laboratorio como lo quieres. 
    </p>
</div>
<div class="plan">
    <h2> Este es el plan:</h2>
    <div class="grid-container">
        <div class="grid-item">
          <img src="person.png" alt="Image 1">
          <h4>1. Eliges</h4>
          <h5>Agrega el inventario que desees a tu carrito, o contáctanos si necesitas ayuda para elegir.</h5>
        </div>
        <div class="grid-item">
          <img src="pay.png" alt="Image 2">
          <h4>2. Compras</h4>
          <h5>Ya sea por tu cuenta o con nuestra ayuda, compra en línea y te enviaremos lo que necesites.</h5>
        </div>
        <div class="grid-item">
          <img src="truck.png" alt="Image 3">
          <h4>3. Recibes</h4>
          <h5>Tu pedido llegará directamente a tu dirección y podrás estar tranquilo con nuestra garantía.</h5>
        </div>
    </div>
    <div class="botonCtzr">
        <br>
        <br>
        <a href="checkout/">¡Cotiza Ya!</a>
    </div>
    <br>
</div>
<p>En Llaves para Laboratorio sabemos que quieres tener un laboratorio de primera.
    Para lograr eso necesitas la mejor herramienta.
    El problema es la falta de variedad que te hace sentir que te conformas con menos. 
    Nosotros creemos que hay una llave o válvula para todas sus necesidades.
    Entendemos la frustracion de no encontrar lo qu necesitas, por lo cual nosotros tenemos la más amplia selección de llaves y válvulas para laboratorio online en México.
    Así es como lo hacemos: 1. Te ayudamos a seleccionar la llave que necesitas.
    2. Cotizamos 3. Enviamos.
    Así que, dale click a cotizar. Y mientras tanto, ¿por qué no lees nuestro blog?. 
    Para que puedas dejar de sentir que te conformas. Y en lugar puedas tener tu laboratorio como lo quieres. 
</p>
<div class="video">
    <img src="video.jpg" alt="video" style="width:50%;">
</div>
<div id="myModal" class="modal">
    <?php include 'navbar/modal.php'; ?>
</div>
</main>
<div class="cajon">
    <?php include 'navbar/footer.php';?>
</div>
</body>
</html>