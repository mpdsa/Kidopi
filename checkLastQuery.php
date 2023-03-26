<?php
date_default_timezone_set('America/Recife');

        $conn = new mysqli('localhost', 'root', '30061993', 'Covid19'); 


        $sql = "SELECT * FROM ultimas_consultas ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
          
          while($row = $result->fetch_assoc()) {
            echo "<p>Última Consulta: " . $row["pais"]. " " . date_format(date_create($row["data"]), 'd/m/Y') . "</p>";
          }
        } else {
          echo "Não existe consultas registradas no momento.";
        }

        $conn->close();
?>
