<?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "llaves_para_laboratorio";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Get the filter value from the URL
    if (isset($_GET['filter'])) {
        $categoria = $_GET['filter'];
    } else {
        $categoria = 'Todos';
    }

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the selected value from the form
        $categoria = $_POST['subject'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Llaves para Laboratorio en Mexico</title>
        <link rel="icon" type="image/x-icon" href="../../navbar/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/estilo.css">
        <link rel="stylesheet" href="../../css/categorias.css">
        <script src="https://kit.fontawesome.com/2bfe246e0a.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
<body>
<?php include '../../navbar/navbar.php';?>
<main>
<!--<div class ="header1">
    <img src="fondo.png" alt="fondo" style="width:100%;">
    <div class="contenidoheader">
        <div class="textoheader">La mayor variedad de llaves para laboratorio en México</div>
        <div class="botoneshdr">
            <a href="cotiza.html" style="float:right">¡Cotiza Ya!</a>
            <a href="cotiza.html" style="float:right">¿Cómo saber que llave es la que necesita tu laboratorio?</a>
        </div>
    </div>
</div>-->
<h1>
    Llaves Importadas
</h1>
<h2>
    <form name="filtro" id="filtro" action="index.php" method="post">
        Filtrar por: 
        <select name="subject" id="subject" onchange="this.form.submit()">
            <option value="todo" <?php if ($categoria == 'todo') echo 'selected="selected"'; ?>>Todo</option>
            <option value="senc" <?php if ($categoria == 'senc') echo 'selected="selected"'; ?>>Sencillas y Mezcladoras</option>
            <option value="agua" <?php if ($categoria == 'agua') echo 'selected="selected"'; ?>>Sencillas para Agua</option>
            <option value="anti" <?php if ($categoria == 'anti') echo 'selected="selected"'; ?>>Línea Antivandálica</option>
            <option value="pre" <?php if ($categoria == 'pre') echo 'selected="selected"'; ?>>Prelavado</option>
            <option value="esp" <?php if ($categoria == 'esp') echo 'selected="selected"'; ?>>Especiales para Agua</option>
            <option value="agu" <?php if ($categoria == 'agu') echo 'selected="selected"'; ?>>Tipo Aguja</option>
            <option value="bola" <?php if ($categoria == 'bola') echo 'selected="selected"'; ?>>Tipo Bola</option>
            <option value="camp" <?php if ($categoria == 'camp') echo 'selected="selected"'; ?>>Accesorios de campana extractora</option>
        </select>
    </form>
</h2> 
<br>
<div class = listado>
<?php
    // Modify the SQL query based on the selected value
    if ($categoria != 'todo') {
        $sql = "SELECT SKU, nombre, precio, enlace, categoria FROM llaves_importadas WHERE categoria = '$categoria'";
    } else {
        $sql = "SELECT SKU, nombre, precio, enlace, categoria FROM llaves_importadas";
    }

    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // Output data of each row
      while($row = $result->fetch_assoc()) {
        echo '<div class="grid-item">';
        echo '<a href="'.$row["enlace"].'/paginallaves'.'/productos'.'/'.$row["SKU"].'"> <img src= "'.$row["enlace"].'/paginallaves'.'/productos'.'/'.$row["SKU"].'/'.$row["SKU"].'.png'.'">';
        echo '<h4>'.$row["SKU"].' '.$row["nombre"].'</h4></a>';
        echo '<h5>$'.number_format($row["precio"], 2, '.', ',').'</h5>';
        echo '<div class="botones">';
        echo '<button class="algo"><div class="textoBtn">Cotizar </div><i class="fa-regular fa-file-lines"></i></button>';
        echo '<button class="share-button"><div class="textoBtn">Compartir </div><input type="text" value="'.$row["enlace"].'/paginallaves'.'/productos'.'/'.$row["SKU"].'" class="shareLink"><i class="fa-solid fa-share-nodes"></i></button>';
        echo '<button class="modalBtn" data-name="'.$row["SKU"].'" data-price="'.$row["precio"].'"> <div class="textoBtn">Comprar </div><i class="fa-solid fa-cart-shopping"></i></button>';
        echo '</div>';
        echo '</div>';
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
</div>
<div id="myModal" class="modal">
    <?php include '../../navbar/modal.php'; ?>
</div>
</main>
<br>
<div class="cajon">
    <?php include '../../navbar/footer.php';?>
</div>
<div id="snackbar">Link copiado al portapapeles</div>
</body>
</html>