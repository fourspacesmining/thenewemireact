<?php
// Conexion a base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "llaves_para_laboratorio";

// Crea conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Consigue el link
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Divide el link en segmentos
$pathSegments = explode('/', trim($urlPath, '/'));

// Consigue el ultimo elemento que es el SKU
$sku = end($pathSegments);
$sku = str_replace('.php', '', $sku);

$sql = "SELECT * FROM (
    SELECT SKU, nombre, precio, enlace, descripcion, consideraciones, categoria
    FROM llaves_importadas
    UNION ALL
    SELECT SKU, nombre, precio, enlace, descripcion, consideraciones, categoria
    FROM llaves_nacionales
    UNION ALL
    SELECT SKU, nombre, precio, enlace, descripcion, consideraciones, categoria
    FROM regaderas_importadas
    UNION ALL
    SELECT SKU, nombre, precio, enlace, descripcion, consideraciones, categoria
    FROM regaderas_nacionales ) AS combined
WHERE SKU = '$sku'";

$result = $conn->query($sql);

// Inicializa variables
$aspectos = '';
$precio = '';
$desc = '';
$enlace = '';
$consideraciones = '';
$categoria = '';

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $pageTitle = $row["SKU"].' '.$row["nombre"];
    $nombre = $row["nombre"];
    $price = $row["precio"];
    $precio = number_format($row["precio"], 2, '.', ',');
    $enlace = $row["enlace"];
    $desc = $row["descripcion"];
    $categoria = $row["categoria"];
    $consideraciones = $row["consideraciones"];
  }
} else {
  echo "0 results";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $pageTitle; ?> - Llaves para Laboratorio México</title>
        <link rel="icon" type="image/x-icon" href="../../navbar/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../css/estilo.css">
        <link rel="stylesheet" href="../../CSS/producto.css">
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
<br>
<br>
<img src=<?php echo $sku.'.png'?>></img>
<div class = "aspectos">
    <h1><?php echo $pageTitle; ?></h1>
    <h2><?php echo '$'.$precio; ?></h2>
    <div class="botones">
        <button class="algo">Cotizar<i class="fa-regular fa-file-lines" style="margin-left:5px;"></i></button>
        <button class="share-button"><input type="text" value=<?php echo $enlace.$urlPath ?> class="shareLink">Compartir<i class="fa-solid fa-share-nodes"  style="margin-left:5px;"></i></button>
        <div class="counter">
              <button id="decrement-btn">-</button>
              <div id="counter-value">1</div>
              <button id="increment-btn">+</button>
          </div>
          <button class="modalBtn" data-name="<?php echo $sku;?>" data-price="<?php echo $price; ?>" >Añadir al Carrito<i class="fa-solid fa-cart-shopping" style="margin-left:5px;"></i></button>
    </div>
    <br>
    <div class = "desc">
        <ul class = list>
        <?php 
        $items = explode('-', $desc); // Divide la descripcion en items
        foreach ($items as $item) {
        echo '<li>'.trim($item).'</li>'; // Muestra cada item como un objeto de lista
        } ?>
        </ul>
    </div>
    <div class = "desc">
        <p><?php echo $consideraciones ?></p>
    </div>
    <div class = "desc">
        <a href= <?php echo $sku.'.pdf download' ?>><h2>Descargar Ficha Técnica</h2></a>
    </div>
</div>
<br>
<h2>
    Productos relacionados:
</h2>
<div class = "productos">
    <?php include '../productos.php'; ?>
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