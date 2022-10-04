<?php

$sqlArtes = "SELECT * FROM artesPlasticas WHERE id IN ($FormOnde);";
$resultArtes = $con->query($sqlArtes);




//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Acre: " . $row["acre"]. " " . $row["alagoas"]. "<br>";
    }
} else {
    echo "0 results";
}*/


/*while ($row = mysql_fetch_assoc($result)) {
          echo $row["column1"];
          echo $row["column2"];
      }*/
      
while ($tblArtes = $resultArtes->fetch_assoc())
            {
                $CodigoArtes = $tblArtes["id"];
                
                $RAArtes = $tblArtes["RA"];
                
                $dado1Artes = $tblArtes["dado1"];
                $dado2Artes = $tblArtes["dado2"];
                $dado3Artes = $tblArtes["dado3"];
                $dado4Artes = $tblArtes["dado4"];
                $dado5Artes = $tblArtes["dado5"];
                $dado6Artes = $tblArtes["dado6"];
                $dado7Artes = $tblArtes["dado7"];
                $dado8Artes = $tblArtes["dado8"];
                $dado9Artes = $tblArtes["dado9"];}
                
                
            ?>
            
            
            
            
<!--BANCO TextoPorLinguagens-->
<?php

$sqlTextoPorLinguagens = "SELECT * FROM textoPorLinguagens WHERE id IN ($FormOQue);";
$resultTextoPorLinguagens = $con->query($sqlTextoPorLinguagens);




      
while ($tblTextoPorLinguagens = $resultTextoPorLinguagens->fetch_assoc())
            {
                $CodigotextoPorLinguagens = $tblTextoPorLinguagens["id"];
                
               
                
                $textoPorLinguagensLinguagem = $tblTextoPorLinguagens["linguagem"];
                $textoPorLinguagensApresentacao = $tblTextoPorLinguagens["apresentacao"];
}
                
                
            ?>