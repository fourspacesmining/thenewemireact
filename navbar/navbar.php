<link rel="stylesheet" href="/paginaLlaves/css/navegacion.css">
<link rel="stylesheet" href="/paginaLlaves/css/modal.css">
<!--Barra superior (contiene el logo, la barra de busqueda y los botones de cotizar y whatsapp)-->
<div class ="titlenav">
    <a href="/paginaLlaves/"> <img src="/paginaLlaves/navbar/logo.png" alt="Llaves Para Laboratorio en Mexico" style="float:left;max-height:75px;"></a>
        <div class = "busqueda">
                <form action="/paginallaves/categorias/busqueda.php" method="post">
                <input type="text" placeholder="Buscar productos" name ="term">
                <button type="submit" value ="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class= "navegacion">
            <!--<a href="login.html" class="icon">Iniciar Sesión <i class="fa-solid fa-user"></i></a>-->
            <!--<a href="/paginaLlaves/checkout/quote">Cotiza<i class="fa-regular fa-file-lines" style="margin-left:5px;margin-right:5px;"></i></a><button class = "BtnCarrito">Compra <i class="fa-solid fa-cart-shopping" style="margin-left:5px;margin-right:5px;"></i><span class="total-count"></span></button>-->
            <button class = "BtnCarrito">Cotiza <i class="fa-regular fa-file-lines" style="margin-left:5px;margin-right:5px;"></i>o Compra <i class="fa-solid fa-cart-shopping" style="margin-left:5px;margin-right:5px;"></i><span class="total-count"></span></button>
            <a href="https://web.whatsapp.com/send?phone=524424950503" class="whatsapp" style = "padding-left: 50px; font-size: large;">¡Cotiza Ya!<a href="https://web.whatsapp.com/send?phone=524424950503" class="icon"><img src="/paginallaves/navbar/whatsapp.png" alt="Whatsapp" style="max-height: 30px;margin-left:-20px;margin-top:-8px;vertical-align:middle;"></a> 
        </div>
    </div>
</div>
<!--Barra de navegación, contiene los links a los diferentes tipos de llaves y eventualmente el blog y otras cosas-->
<div class="topnav">
    <div class="dropdown">
        <button class="dropbtn"><a href="/paginaLlaves/categorias/llaves-nacionales/?filter=todo">Llaves Nacionales</a></button>
        <div class="dropdown-content">
            <a href="/paginaLlaves/categorias/llaves-nacionales/?filter=llave">Llaves</a>
            <a href="/paginaLlaves/categorias/llaves-nacionales/?filter=torreta">Torretas</a>
            <a href="/paginaLlaves/categorias/llaves-nacionales/?filter=otro">Otros</a>
            <div class="gallery" style="margin-top: -8.49vh;">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 1">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 2">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 3">
            </div> 
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><a href="/paginaLlaves/categorias/llaves-importadas/?filter=todo">Llaves Importadas</a></button>
        <div class="dropdown-content">
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=senc">Llaves Sencillas y Mezcladoras</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=agua">Válvulas Sencillas para Agua</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=anti">Llaves y Válvulas Linea Antivandálica</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=pre">Llaves de Prelavado</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=esp">Llaves y Válvulas Especiales para Agua</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=agu">Válvulas tipo Aguja</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=bola">Válvulas tipo Bola</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=camp">Accesorios de campana extractora</a>
            <div class="gallery" style="margin-top:-25vh;">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 1">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 2">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 3">
            </div> 
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn"><a href="/paginaLlaves/categorias/regaderas-nacionales/?filter=todo">Regaderas de Emergencia Nacionales</a></button>
        <div class="dropdown-content">
            <a href="/paginaLlaves/categorias/regaderas-nacionales/?filter=regaGalv">Regaderas de Acero Galvanizado</a>
            <a href="/paginaLlaves/categorias/regaderas-nacionales/?filter=regaInox">Regaderas de Acero Inoxidable</a>
            <a href="/paginaLlaves/categorias/regaderas-nacionales/?filter=lavaGalv">Lavaojos de Acero Galvanizado
            <a href="/paginaLlaves/categorias/regaderas-nacionales/?filter=lavaInox">Lavaojos de Acero Inoxidable</a>
            <a href="/paginaLlaves/categorias/regaderas-nacionales/?filter=port">Lavaojos Portátiles</a>
            <div class="gallery" style="margin-top:-15vh;">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 1">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 2">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 3">
            </div> 
        </div>
      </div>    
    <div class="dropdown">
        <button class="dropbtn"><a href="/paginaLlaves/categorias/regaderas-importadas/?filter=todo">Estaciones de Seguridad Importadas</a></button>
        <div class="dropdown-content">
            <a href="/paginaLlaves/categorias/regaderas-importadas/?filter=ojos">Lavado de ojos/cara</a>
            <a href="/paginaLlaves/categorias/regaderas-importadas/?filter=esta">Estaciones de seguridad</a>
            <a href="/paginaLlaves/categorias/regaderas-importadas/?filter=grif">Lavaojos montados en grifo</a>
            <div class="gallery" style ="margin-top:-8.49vh;">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 1">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 2">
                <img src="/paginaLlaves/navbar/dropdown2.png" alt="Gallery image 3">
            </div> 
        </div>
    </div>
    <div class= "links">   
        <!--eventualmente poblar con blog y otras cosas-->
    </div>
</div>
<!-- Contenedor movil, se activa cuando la resolución horizontal es de menos de 1000 px -->
<div class="mobile-container">
    <div class="topnavM">
        <div class="menu">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa-solid fa-bars" style="font-size: 17px;"></i></a>
        </div>
        <a href="/paginaLlaves/"> <img src="/paginaLlaves/navbar/logo.png" alt="Llaves Para Laboratorio en Mexico"></a>
        <div class="busquedaM">
            <form action="/paginallaves/categorias/busqueda.php" method="post">
                <input type="text" placeholder="Buscar productos" name ="term">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class= "navegacionM">
            <!--<a href="login.html" class="icon">Iniciar Sesión <i class="fa-solid fa-user"></i></a>-->
            <!--<a href="cotiza.html" class="icon"><i class="fa-solid fa-pen-to-square"></i></a>-->
            <a href="/paginaLlaves/checkout/quote" class="icon"><i class="fa-regular fa-file-lines" style="margin-left:5px;"></i></a><button class = "BtnCarrito"><i class="fa-solid fa-cart-shopping" style="margin-right:5px;"></i><span class="total-count"></span></button>
            <a href="https://web.whatsapp.com/send?phone=524424950503" class="whatsapp"><img src="/paginallaves/navbar/whatsapp.png" alt="Whatsapp" style="font-size: 25px;margin-left: 0.7vw;"></a> 
        </div>
        <div id="myLinks">
            <a href="/paginaLlaves/categorias/llaves-nacionales/?filter=todo">Llaves Nacionales</a>
            <a href="/paginaLlaves/categorias/llaves-importadas/?filter=todo">Llaves Importadas</a>
            <a href="/paginaLlaves/categorias/regaderas-nacionales/?filter=todo">Regaderas Nacionales</a>
            <a href="/paginaLlaves/categorias/regaderas-importadas/?filter=todo">Estaciones de Seguridad Importadas</a>
        </div>
    </div>
</div>
<!-- Para oscurecer la página cuando se hace hover en la barra de navegación-->
<div id="overlay"></div>