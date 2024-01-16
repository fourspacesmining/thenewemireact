<?php

    $sql2 = "SELECT * FROM (
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
        WHERE categoria = '$categoria' AND sku != '$sku' 
        ORDER BY RAND() LIMIT 4 ";

    $result2 = $conn->query($sql2);
    
    if ($result2->num_rows > 0) {
      // Output data of each row
      while($row = $result2->fetch_assoc()) {
        echo '<div class="grid-item">';
        echo '<a href="'.$row["enlace"].'/paginallaves'.'/productos'.'/'.$row["SKU"].'"> <img src= "'.$row["enlace"].'/paginallaves'.'/productos'.'/'.$row["SKU"].'/'.$row["SKU"].'.png'.'">';
        echo '<h4>'.$row["SKU"].' '.$row["nombre"].'</h4></a>';
        echo '<h5>$'.number_format($row["precio"], 2, '.', ',').'</h5>';
        echo '</div>';
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?>