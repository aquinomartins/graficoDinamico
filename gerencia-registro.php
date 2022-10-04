<!--
Jesus Cristo_O Caminho, A Verdade e A Vida
-->

<?php
include("calculoSemantico.php");
include("conexao.php");
include("chamar.php");
include("../dashboard_principal/semantica/2.0FatoresExternos.php");
include("ras2.php");







?>
<?php
if($FormOnde == 1){
    $fd = 12444;
}else if($FormOnde == 2){
    $fd = 22444;
}else if($FormOnde == 13){
    $fd = "Santa Maria";
}else if($FormOnde == "taguatinga"){
    $fd = 1;
}else{
    $fd = 17;
};

?>



<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $fd;?></title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template
    <link href="../css/modern-business.css" rel="stylesheet">
    -->
    
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
   <link href="https://fonts.googleapis.com/css?family=Noto+Serif+SC|Noto+Serif+TC" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Poiret+One" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet"> 
   
   <link href="https://fonts.googleapis.com/css?family=Anton|Crimson+Text|Fjalla+One|Gilda+Display|Lobster|Lora|PT+Sans|Teko|Tinos" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css?family=Coiny|Roboto|Staatliches" rel="stylesheet">
   
   <link href="https://fonts.googleapis.com/css?family=Lora|Playfair+Display|Roboto+Slab|Slabo+27px|Staatliches" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="http://www.dashboardlivre.com.br/mapa/leaflet/leaflet.css" />
	<script src="http://www.dashboardlivre.com.br/mapa/leaflet/leaflet.js"></script>
	

<style>
body {

  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #800033;/*#660029; #222f3f;*/
}

.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 16px;
  text-decoration: none;
  font-size: 15px;
  /*width: 10%;*/
}

.topnav a:hover {
  /*background-color: #ddd;*/
  color: #ffff00;
}

.active {
  background-color: #4CAF50;
  color: white;
}



.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}

.contraste {-webkit-filter: hue-rotate(180deg) brightness(1);filter: hue-rotate(18deg) brightness(1);}
</style>


  </head>
        <body style="background-color:#ffffff">
            
    <nav align="center">
           
        <div class="topnav" id="myTopnav" style="box-shadow: 0px 2px 2px #000000;">
        

        <img src="../imagens/logoB.png" style="height: 45px; margin-left:30px; margin-top:12px; margin-bottom:26px" class="float-left">
   
  <a href="#home" style="margin-top:10px; margin-left:30px"></a>
  <a href="http://www.dashboardlivre.com.br" style="margin-top:10px; margin-left:30px">Início</a>


</div>



    </nav>
            <div class="w-100" style="margin-left: 0;
    margin-right: 0;">
            
            <div class="col-sm-6" style="background-color:#ffffff;">
                <?php
                
                
            include("conexao.php");
            

            
            

                
                
                

                
                echo "<script>";
                
                if($FormOnde == 1){
                    include("graficosPlanoPiloto.php");
                    echo $desenho;
                }else if($FormOnde == 12){
                    include("graficosSamambaia.php");
                    echo $desenho;
                }else if($FormOnde == 13){
                    include("graficosSantaMaria.php");
                    echo $desenho;
                }else{
                    include("graficos.php");
                    echo $desenho;
                }
                echo "</script>";
                
                $Codigo3 = 2;
                
                
                
//------------- A -------------------

                echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo' id='dashboardGeral$Codigo' width='4000' height='3000' style='margin-left:0px; margin-right:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivo($Codigo,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);</script>";

                
                

                echo "<!-- The Modal -->";
                echo "<div class='modal fade' id='myModal$Codigo'>";
                echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
      
                echo "<!-- Modal Header -->";
                echo "<div class='modal-header'>";
                echo "<h4 class='modal-title'>Formulário</h4>";
                echo "<button type='button' class='close' data-dismiss='modal'>×";
                echo "</button>";
                echo "</div>";
        
                echo "<!-- Modal body -->";
                echo "<div class='modal-body'>";
                echo "<div>";
                echo "<form id='formulario$Codigo'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo1$Codigo' value='1'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo2$Codigo' value='2'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo3$Codigo' value='3'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo4$Codigo' value='4'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo5$Codigo' value='5'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo6$Codigo' value='6'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo7$Codigo' value='7'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo8$Codigo' value='8'>";
                
                echo "<select id='tipo$Codigo' name='numbers'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                
                </select>";
                
    
                echo "<input type='submit' value='Enviar'>";
                echo "</form>";
                
                
                echo "<script>var form = document.getElementById('formulario$Codigo');
var campo1$Codigo = document.getElementById('campo1$Codigo');
var campo2$Codigo = document.getElementById('campo2$Codigo');
var campo3$Codigo = document.getElementById('campo3$Codigo');
var campo4$Codigo = document.getElementById('campo4$Codigo');
var campo5$Codigo = document.getElementById('campo5$Codigo');
var campo6$Codigo = document.getElementById('campo6$Codigo');
var campo7$Codigo = document.getElementById('campo7$Codigo');
var campo8$Codigo = document.getElementById('campo8$Codigo');



var tipo$Codigo = document.getElementById('tipo$Codigo');



form.addEventListener('submit', function(e) {

desenhoScriptivo(tipo$Codigo.value,500,1000,'#ffffff',campo1$Codigo.value,campo2$Codigo.value,campo3$Codigo.value,campo4$Codigo.value,campo5$Codigo.value,campo6$Codigo.value,campo7$Codigo.value,campo8$Codigo.value,'#000000',120,'dashboardGeral$Codigo',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);

    

// impede o envio do form
e.preventDefault();
});
</script>";



                echo "</div>";
                echo "</div>";
        
                echo "<!-- Modal footer -->";
                echo "<div class='modal-footer'>";
                echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close";
                echo "</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
  
                echo "</div>";

            ?>
            </div>
            
            <div class="col-sm-6" style="background-color:#ffffff;">
                <?php
                
                
            include("conexao.php");
            

            
            

                
                
                
//------------- B -------------------
                
                
                
                
                $Codigo2 = 7;
                
                echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo2' id='dashboardGeral$Codigo2' width='4000' height='3000' style='margin-top:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivo($Codigo2,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo2',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);</script>";

                
                

                echo "<!-- The Modal -->";
                echo "<div class='modal fade' id='myModal$Codigo2'>";
                echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
      
                echo "<!-- Modal Header -->";
                echo "<div class='modal-header'>";
                echo "<h4 class='modal-title'>Formulário</h4>";
                echo "<button type='button' class='close' data-dismiss='modal'>×";
                echo "</button>";
                echo "</div>";
        
                echo "<!-- Modal body -->";
                echo "<div class='modal-body'>";
                echo "<div>";
                echo "<form id='formulario$Codigo2'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo1$Codigo2' value='1'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo2$Codigo2' value='2'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo3$Codigo2' value='3'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo4$Codigo2' value='4'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo5$Codigo2' value='5'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo6$Codigo2' value='6'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo7$Codigo2' value='7'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo8$Codigo2' value='8'>";
                
                echo "<select id='tipo$Codigo2' name='numbers'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                
                </select>";
                
    
                echo "<input type='submit' value='Enviar'>";
                echo "</form>";
                
                
                echo "<script>var form = document.getElementById('formulario$Codigo2');
var campo1$Codigo2 = document.getElementById('campo1$Codigo2');
var campo2$Codigo2 = document.getElementById('campo2$Codigo2');
var campo3$Codigo2 = document.getElementById('campo3$Codigo2');
var campo4$Codigo2 = document.getElementById('campo4$Codigo2');
var campo5$Codigo2 = document.getElementById('campo5$Codigo2');
var campo6$Codigo2 = document.getElementById('campo6$Codigo2');
var campo7$Codigo2 = document.getElementById('campo7$Codigo2');
var campo8$Codigo2 = document.getElementById('campo8$Codigo2');



var tipo$Codigo2 = document.getElementById('tipo$Codigo2');



form.addEventListener('submit', function(e) {

desenhoScriptivo(tipo$Codigo2.value,500,1000,'#ffffff',campo1$Codigo2.value,campo2$Codigo2.value,campo3$Codigo2.value,campo4$Codigo2.value,campo5$Codigo2.value,campo6$Codigo2.value,campo7$Codigo2.value,campo8$Codigo2.value,'#000000',120,'dashboardGeral$Codigo2',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);

    

// impede o envio do form
e.preventDefault();
});
</script>";



                echo "</div>";
                echo "</div>";
        
                echo "<!-- Modal footer -->";
                echo "<div class='modal-footer'>";
                echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close";
                echo "</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
  
                echo "</div>";

            ?>
            </div>
            </div>
            
            <div class="w-100" style="margin-left: 0;
    margin-right: 0;">
            
            <div class="col-sm-12" style="background-color:#000000;">
                <?php
                
                
            include("conexao.php");
            

            
            

                
                
                
//------------- C -------------------
                
                
                
                
                
                echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo3' id='dashboardGeral$Codigo3' width='4000' height='3000' style='margin-left:0px; margin-right:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivo($Codigo3,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo3',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);</script>";

                
                

                echo "<!-- The Modal -->";
                echo "<div class='modal fade' id='myModal$Codigo3'>";
                echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
      
                echo "<!-- Modal Header -->";
                echo "<div class='modal-header'>";
                echo "<h4 class='modal-title'>Formulário</h4>";
                echo "<button type='button' class='close' data-dismiss='modal'>×";
                echo "</button>";
                echo "</div>";
        
                echo "<!-- Modal body -->";
                echo "<div class='modal-body'>";
                echo "<div>";
                echo "<form id='formulario$Codigo3'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo1$Codigo3' value='1'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo2$Codigo3' value='2'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo3$Codigo3' value='3'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo4$Codigo3' value='4'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo5$Codigo3' value='5'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo6$Codigo3' value='6'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo7$Codigo3' value='7'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo8$Codigo3' value='8'>";
                
                echo "<select id='tipo$Codigo3' name='numbers'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                
                </select>";
                
    
                echo "<input type='submit' value='Enviar'>";
                echo "</form>";
                
                
                echo "<script>var form = document.getElementById('formulario$Codigo3');
var campo1$Codigo3 = document.getElementById('campo1$Codigo3');
var campo2$Codigo3 = document.getElementById('campo2$Codigo3');
var campo3$Codigo3 = document.getElementById('campo3$Codigo3');
var campo4$Codigo3 = document.getElementById('campo4$Codigo3');
var campo5$Codigo3 = document.getElementById('campo5$Codigo3');
var campo6$Codigo3 = document.getElementById('campo6$Codigo3');
var campo7$Codigo3 = document.getElementById('campo7$Codigo3');
var campo8$Codigo3 = document.getElementById('campo8$Codigo3');



var tipo$Codigo3 = document.getElementById('tipo$Codigo3');



form.addEventListener('submit', function(e) {

desenhoScriptivo(tipo$Codigo3.value,500,1000,'#ffffff',campo1$Codigo3.value,campo2$Codigo3.value,campo3$Codigo3.value,campo4$Codigo3.value,campo5$Codigo3.value,campo6$Codigo3.value,campo7$Codigo3.value,campo8$Codigo3.value,'#000000',120,'dashboardGeral$Codigo3',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);

    

// impede o envio do form
e.preventDefault();
});
</script>";



                echo "</div>";
                echo "</div>";
        
                echo "<!-- Modal footer -->";
                echo "<div class='modal-footer'>";
                echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close";
                echo "</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
  
                echo "</div>";

            ?>
            </div>
            
            <div class="col-sm-12" style="background-color:#ffffff;">
                <?php
                
                
            include("conexao.php");
            

            
            

                
                
                
//------------- D -------------------
                
                
                
                
                $Codigo4 = 3;
                
                echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo4' id='dashboardGeral$Codigo4' width='4000' height='3000' style='margin-top:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivo($Codigo4,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo4',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);</script>";

                
                

                echo "<!-- The Modal -->";
                echo "<div class='modal fade' id='myModal$Codigo4'>";
                echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
      
                echo "<!-- Modal Header -->";
                echo "<div class='modal-header'>";
                echo "<h4 class='modal-title'>Formulário</h4>";
                echo "<button type='button' class='close' data-dismiss='modal'>×";
                echo "</button>";
                echo "</div>";
        
                echo "<!-- Modal body -->";
                echo "<div class='modal-body'>";
                echo "<div>";
                echo "<form id='formulario$Codigo4'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo1$Codigo4' value='1'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo2$Codigo4' value='2'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo3$Codigo4' value='3'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo4$Codigo4' value='4'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo5$Codigo4' value='5'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo6$Codigo4' value='6'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo7$Codigo4' value='7'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo8$Codigo4' value='8'>";
                
                echo "<select id='tipo$Codigo4' name='numbers'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                
                </select>";
                
    
                echo "<input type='submit' value='Enviar'>";
                echo "</form>";
                
                
                echo "<script>var form = document.getElementById('formulario$Codigo4');
var campo1$Codigo4 = document.getElementById('campo1$Codigo4');
var campo2$Codigo4 = document.getElementById('campo2$Codigo4');
var campo3$Codigo4 = document.getElementById('campo3$Codigo4');
var campo4$Codigo4 = document.getElementById('campo4$Codigo4');
var campo5$Codigo4 = document.getElementById('campo5$Codigo4');
var campo6$Codigo4 = document.getElementById('campo6$Codigo4');
var campo7$Codigo4 = document.getElementById('campo7$Codigo4');
var campo8$Codigo4 = document.getElementById('campo8$Codigo4');



var tipo$Codigo4 = document.getElementById('tipo$Codigo4');



form.addEventListener('submit', function(e) {

desenhoScriptivo(tipo$Codigo4.value,500,1000,'#ffffff',campo1$Codigo4.value,campo2$Codigo4.value,campo3$Codigo4.value,campo4$Codigo4.value,campo5$Codigo4.value,campo6$Codigo4.value,campo7$Codigo4.value,campo8$Codigo4.value,'#000000',120,'dashboardGeral$Codigo4',$natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe);

    

// impede o envio do form
e.preventDefault();
});
</script>";



                echo "</div>";
                echo "</div>";
        
                echo "<!-- Modal footer -->";
                echo "<div class='modal-footer'>";
                echo "<button type='button' class='btn btn-danger' data-dismiss='modal'>Close";
                echo "</button>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
  
                echo "</div>";

            ?>
            </div>
            </div>
            
            <div class="center-block contraste" id="mapid" style="padding-left:0px; width: 100%; height: 500px; pointer-events:none;"></div>
<script>

	var mymap = L.map('mapid').setView([<?php echo $coordenadas?>], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 19,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	L.marker([<?php echo $coordenadas?>]).addTo(mymap)
		.bindPopup("<b>Jesus Cristo</b><br />_O Caminho, A Verdade e A Vida").openPopup();

	L.circle([-15.8094,-47.8933], 500, {
		color: '#ffd700',
		fillColor: '#f03',
		fillOpacity: 0.5
	}).addTo(mymap).bindPopup("I am a circle.");

	L.polygon([
		[51.509, -0.08],
		[51.503, -0.06],
		[51.51, -0.047]
	]).addTo(mymap).bindPopup("I am a polygon.");
	
	
	function poli(a){L.polygon([
		[-16.03730,a],
		[-16.04760,-48.14369],
		[-16.05790,-48.05379]
	]).addTo(mymap).bindPopup("Santa Maria");
	
}


	var popup = L.popup();

	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("You clicked the map at " + e.latlng.toString())
			.openOn(mymap);
	}

	mymap.on('click', onMapClick);

</script>

<script>poli(-48);</script>
            
            

   
    <script>// <![CDATA[
init(); 
// ]]&gt;</script>


<div class="" style="margin-top:0px; background-color:#000000;color:#162970"><h1>Jesus</h1>
</div>


    <header style="background-color:#dfdfdf;">
        




<div class="container-fluid">
    
    
    
    <script>
function myFunction() {
  var x = document.getElementById('myDIV');
  if (x.style.display === 'none') {
    x.style.display = 'block';
  } else {
    x.style.display = 'none';
  }
}
</script>
  <div class="row">
    <div class="col-12 bg-primary">
        <img src="../imagens/infographic.png" style="width: 100%;margin-top:0px; margin-bottom:0px">
        
        <img src="../imagens/vocabularioVisual.png" style="width: 100%;margin-top:0px; margin-bottom:0px">
    </div>
    
    
                
                
  </div>
</div>






<?php
function writeMsg($r) {
    echo "<script>textos('$r',1200,300,'#000000');</script>";
}


?>


<?php writeMsg($FormQuem); ?>
        
    </header>
    

      
      

</div>

</div>
      
    

    <!-- Page Content -->

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-0 bg-primary w-100">
        <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9 col-md-6 col-lg-8 bg-primary">
          <div class="container ">
        <div class="row" style="margin-top:50px;">
            
            <div class="col-lg-4 col-sm-6 portfolio-item">
          
            <div class="card-body">
              <h6 class="card-title text-info">
               <?php echo resultadoFatoresExternos()?>
              </h6>
              <small><a href="https://www.rededeensinojk.com.br/copia-institucional" target="_blank" class="text-light">+ Sobre</a></small><br>
              <!--small><a href="#" target="_blank" class="text-light">+ História</a></small><br>
              <small><a href="#" target="_blank" class="text-light">+ Juscelino kubitschek</a></small><br-->
              <small><a href="https://www.rededeensinojk.com.br/faculdades" target="_blank" class="text-light">+ Faculdade JK</a></small><br>
              <small><a href="https://colegiojk.com.br/" target="_blank" class="text-light">+ Colégio JK</a></small><br>
              <small><a href="https://vestibular.uninassau.edu.br/HomePage.aspx" target="_blank" class="text-light">+ EAD</a></small><br>
              <small><a href="https://www.unicollege.net/redejk/ps/cadastroinc.aspx" target="_blank" class="text-light">+ Vestibular</a></small><br>
              <small><a href="https://docs.wixstatic.com/ugd/55d74c_143e6732b0ba4d94bbd5af8a5e0b50b6.pdf" target="_blank" class="text-light">+ Edital do Vestibular</a></small><br><br>
              
             
              
              
            </div>
          
        </div>
        
    
        
        <div class="col-lg-4 col-sm-6 portfolio-item d-none d-lg-block">
          
            <div class="card-body">
              <h6 class="card-title text-info">
                Unidades
              </h6>
              <small><a href="https://www.rededeensinojk.com.br/faculdades" class="text-light">+ Endereços</a></small><br>
              <small><a href="https://www.google.com.br/maps/place/Bras%C3%ADlia,+DF,+70390-090/@-15.8112956,-47.9132247,437m/data=!3m2!1e3!4b1!4m2!3m1!1s0x935a3abca4de0253:0x619c4b1e5fb8cde" class="text-light"><i class="fa fa-map-marker fa-sm"></i> Asa Sul</a></small><br>
              <small><a href="https://www.google.com.br/maps/place/72405+-+St.+Central+-+Gama,+Bras%C3%ADlia+-+DF/@-16.0132732,-48.0634528,583m/data=!3m2!1e3!4b1!4m5!3m4!1s0x9359800b22ccc723:0x83be42f125a88ece!8m2!3d-16.0132732!4d-48.0616212" class="text-light"><i class="fa fa-map-marker fa-sm"></i> Gama</a></small><br>
              <small><a href="https://www.google.com.br/maps/place/Col%C3%A9gio+e+Faculdade+JK/@-15.8120476,-47.9909555,369m/data=!3m1!1e3!4m2!3m1!1s0x0000000000000000:0xe2b0858adc9e58e8" class="text-light"><i class="fa fa-map-marker fa-sm"></i> Guará</a></small><br>
              <small><a href="https://www.google.com.br/maps/place/Faculdade+JK+Bras%C3%ADlia/@-15.8665482,-48.096312,260m/data=!3m1!1e3!4m2!3m1!1s0x0000000000000000:0x786247a6ef721821" class="text-light"><i class="fa fa-map-marker fa-sm"></i> Samambaia</a></small><br>
              <!--small><a href="#" class="text-light">+ Valparaíso</a></small><br-->
             
              
              
            </div>
          
        </div>
        
        <div class="col-lg-4 col-sm-6 portfolio-item">
          
            <div class="card-body">
              <h6 class="card-title text-info">
                Acontece na JK
              </h6>
              <small><a href="https://www.rededeensinojk.com.br/empregabilidade/category/Not%C3%ADcias" class="text-light">+ Eventos</a></small><br>
              <small><a href="https://www.rededeensinojk.com.br/empregabilidade/category/Not%C3%ADcias" class="text-light">+ Notícias</a></small><br>
              <small><a href="https://www.facebook.com/FaculdadesJKOficial/videos/358496464709376/" class="text-light">+ Redes Sociais</a></small><br>
              <small><a href="https://twitter.com/rededeensinojk" class="text-light">+ Dia a dia</a></small><br>
              <small><a href="https://www.rededeensinojk.com.br/empregabilidade/category/Not%C3%ADcias" class="text-light">+ Comunidade</a></small><br>
             
              
              
            </div>
          
        </div>
        

        
      </div>
      </div>
      </div>
      <div class="col-sm-3 col-md-6 col-lg-4 bg-info">
          
          
            <div class="card-body" style="margin-top:50px;">
              <h6 class="card-title text-light">
                <i class="fa fa-phone-square fa-lg" aria-hidden="true"></i>
                <!--?php echo $FormQuem; ?-->
                <?php secante1(27);?>
                <?php secante2(27);?>
              </h6>
              <small><a href="#" class="text-primary"><b>+ 0800 601 9930</b></a></small><br>
              <small><a href="https://www.rededeensinojk.com.br/copia-fale-conosco" class="text-primary"><b>+ Fale Conosco</b></a></small><br><br>
              <h6 class="card-title text-light">
                <i class="fa fa-comments-o fa-lg"></i>  Ouvidoria
              </h6>
              <small><a href="https://www.rededeensinojk.com.br/copia-fale-conosco" class="text-primary"><b>+ CPA</b></a></small><br>
              <small><a href="https://www.rededeensinojk.com.br/copia-fale-conosco" class="text-primary"><b>+ Fale com a CPA</b></a></small><br><br>
              <!--h6 class="card-title text-light">
                <i class="fa fa-users fa-lg" aria-hidden="true"></i>
  Outros telefones e endereços
              </h6-->
              <br>
              
             
              
              
            </div>
          
        </div>
    </div>  
  </div>
      
      <!-- /.container -->
    </footer>
    
    <footer class="py-0 bg-warning w-100">
        
  <!--/div-->
        <p class="text-center text-muted font-italic">
            <br>
        
         
<small>Faculdade JK - desde 1972</small></p><br>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "72px";
  }
}
</script>

            <div>
  
  
        

    
    
  </div>
</body>
</html>