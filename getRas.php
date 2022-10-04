<?php
$q = intval($_GET['q']);
$u = intval($_GET['u']);


$sql2 = "SELECT * FROM ras WHERE id = '".$q."'";
$result2 = $con2->query($sql2);

alert($q);


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
      
while ($tbl2 = $result2->fetch_assoc())
            {$Codigo22 = $tbl2["id"];
                
                $natAcre2 = $tbl2["acre"];
                $natAlagoas2 = $tbl2["alagoas"];
                $natAmapa2 = $tbl2["amapa"];
                $natAmazonas2 = $tbl2["amazonas"];
                $natBahia2 = $tbl2["bahia"];
                $natCeara2 = $tbl2["ceara"];
                $natEspiritoSanto2 = $tbl2["espiritoSanto"];
                $natGoias2 = $tbl2["goias"];
                $natMaranhao2 = $tbl2["maranhao"];
                $natMatoGrosso2 = $tbl2["matoGrosso"];
                $natMatoGrossoDoSul2 = $tbl2["matoGrossoDoSul"];
                $natMinasGerais2 = $tbl2["minasGerais"];
                $natPara2 = $tbl2["para"];
                $natParaiba2 = $tbl2["paraiba"];
                $natParana2 = $tbl2["parana"];
                $natPernambuco2 = $tbl2["pernambuco"];
                $natPiaui2 = $tbl2["piaui"];
                $natRioDeJaneiro2 = $tbl2["rioDeJaneiro"];
                $natRioGrandeDoNorte2 = $tbl2["rioGrandeDoNorte"];
                $natRioGrandeDoSul2 = $tbl2["rioGrandeDoSul"];
                $natRondonia2 = $tbl2["rondonia"];
                $natRoraima2 = $tbl2["roraima"];
                $natSantaCatarina2 = $tbl2["santaCatarina"];
                $natSaoPaulo2 = $tbl2["saoPaulo"];
                $natSergipe2 = $tbl2["sergipe"];
                $natTocantins2 = $tbl2["tocantins"];
                $natExterior2 = $tbl2["exterior"];
                $natNaoSabe2 = $tbl2["naoSabe"];
                $popCriancas2 = $tbl2["criancas"];
                $popJovens2 = $tbl2["jovens"];
                $popAdultos2 = $tbl2["adultos"];
                $popIdosos2 = $tbl2["idosos"];
                $transOnibus2 = $tbl2["onibus"];
                $transAutomovel2 = $tbl2["automovel"];
                $transUtilitario2 = $tbl2["utilitario"];
                $transMetro2 = $tbl2["metro"];
                $transMotocicleta2 = $tbl2["motocicleta"];
                $transBicicleta2 = $tbl2["bicicleta"];
                $transAPe2 = $tbl["aPe"];
                $transOutros2 = $tbl2["outros"];
                
                
                /*$onibus = $tbl["onibus"];
                $automovel = $tbl["automovel"];
                $utilitario = $tbl["utilitario"];
                $metro = $tbl["metro"];
                $motocicleta = $tbl["motocicleta"];
                $bicicleta = $tbl["bicicleta"];
                $aPe = $tbl["aPe"];
                $outros = $tbl["outros"];*/
            }

            ?>