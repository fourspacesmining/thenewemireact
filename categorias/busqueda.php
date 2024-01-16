<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

$term = $_REQUEST['term'];    

$sql = "SELECT * FROM (
    SELECT *
    FROM llaves_importadas
    UNION ALL
    SELECT *
    FROM llaves_nacionales
    UNION ALL
    SELECT *
    FROM regaderas_importadas
    UNION ALL
    SELECT *
    FROM regaderas_nacionales ) AS combined 
    WHERE LOWER(nombre) LIKE LOWER(?)
    ORDER BY RAND()";

//agregar sku en terminos de busqueda//

$stmt = $conn->prepare($sql);

$searchTerm = "%" . $term . "%";
$stmt->bind_param("s", $searchTerm);

$stmt->execute();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Llaves para Laboratorio en Mexico</title>
        <link rel="icon" type="image/x-icon" href="../navbar/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/estilo.css">
        <link rel="stylesheet" href="../css/categorias.css">
        <script src="https://kit.fontawesome.com/2bfe246e0a.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
<body>
<?php include '../navbar/navbar.php';?>
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
    Resultados
</h1>
<br>
<div class = listado>
<?php
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="grid-item">';
        echo '<a href="'.$row["enlace"].'/paginallaves'.'/productos'.'/'.$row["SKU"].'"> <img src= "/paginallaves'.'/productos'.'/'.$row["SKU"].'/'.$row["SKU"].'.png'.'">';
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
      echo "Ningún resultado";
    }
    $conn->close();
?>
</div>
<div id="myModal" class="modal">
    <?php include '../navbar/modal.php'; ?>
</div>
</main>
<br>
<div class="cajon">
    <?php include '../navbar/footer.php';?>
</div>
<div id="snackbar">Link copiado al portapapeles</div>
</body>
</html>