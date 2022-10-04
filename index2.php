<?php

include("conexao.php");
include("chamar.php");
include("decidir.php");
include("chamarBD/mapasCulturaisEspacos.php");

include("semantica/2.0FatoresExternos.php");
include("3graficosDFBeta.php");
include("3graficosDF.php");


include("pizza8.php");

?>

<head>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../mapa/leaflet/leaflet.css" />
	<script src="../mapa/leaflet/leaflet.js"></script>
	
	<style>.mapid2 {
  -webkit-filter: grayscale(70%); /* Safari 6.0 - 9.0 */
  filter: grayscale(70%);

  height: 300px;
}

.mapid3 {
      -webkit-filter: hue-rotate(120deg);
  filter: hue-rotate(120deg);

}</style>

<script>
function myFunctione() {
  window.print();
}
</script>
	
</head>
<body>
    
    
    <div class="container border-secondary" style="margin-top:50px; margin-bottom:100px">
        
        <div class="container">

            <div class="row border border-top-0 border-right-0 border-left-0" style="margin-top:0px; padding-bottom:30px">
                <div class="col-sm-4">
                    <p style="letter-spacing: 0px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 22px;text-align:left;">Relatório</p>
                    <p style="letter-spacing: 0px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 16px;text-align:left;">Nome: <?php echo $FormQuem ?></p>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-6"><p class="float-right"><small><b>Data da Análise:</b> <?php 


date_default_timezone_set("America/Sao_Paulo");
echo "Dashboard Livre, " . date("j, M, Y, h:i:sa");

?> , Brasília-DF. <i>Versão 3</i></small></p></div>
            </div>
        </div>
        
        <div class="container">
            <div style="margin-top:30px; margin-bottom:50px">
                <h2><?php echo $linguagem, ' em ', $local?></h2>
            </div>
        </div>
    
    <div class="container" style="margin-top:0px; margin-bottom:30px">
        
    <div class="row">
<div class="col-sm-6">
<?php
                            $Codigo5 = 5;
                            echo "<script>";
                            echo $desenhoNovo1;
                            echo "</script>";
                            echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo5' id='dashboardGeral$Codigo5' width='1400' height='700' style='margin-left:0px; margin-right:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivoNovo1($Codigo5,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo5');</script>";
                ?>
                            
                                </div>

                                
<div class="col-sm-6">
<?php
                            $Codigo4 = 4;
                            echo "<script>";
                            echo $desenhoNovo2;
                            echo "</script>";
                            echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo4' id='dashboardGeral$Codigo4' width='1400' height='700' style='margin-left:0px; margin-right:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivoNovo1($Codigo4,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo4');</script>";
                ?>
</div>

<!--
$popCriancas
$popJovens
$popAdultos
$popIdosos

$resultadoEquipamentos
$resultadoEquipamentosFrase1

$conceitoLinguagem
-->

<div class="col-sm-4"><p>A Região Administrativa <b><?php echo $local;?></b>, onde a população é constituida por <b><?php echo $faixaEtáriaAdulto; ?></b>% de adultos e <b><?php echo $faixaEtáriaJovens; ?></b>% de jovens, o mercado de <b><?php echo $linguagem?></b> está <b><?php echo $resultadoMercadoFrase1;?> </b>, com <b><?php echo $resultadoMercado, '%';?></b> de relevância na cena do Distrito Federal. <b><?php echo $sujeitoLinguagem?></b> e produtores estão debatendo as causas e as consequências das cenas artísticas que estão se tornando menos relevantes para o público, em especial para os jovens. Alguns atribuem ao encarceramento das linguagens em ideologias opostas, outros apontam fatores estruturais. Os produtores apresentam incertezas sobre as mudanças tecnológicas, fatores econômicos e mudança de hábitos da população. 
<br>

</div>
<div class="col-sm-4"><p>A <b><?php echo $resultadoEquipamentosFrase1; ?></b> dos equipamentos culturais (<b><?php echo $resultadoEquipamentos, '%';?></b> de satisfação)  dos diretores, relatam <b><?php echo $resultadoTecnologicoFrase1?></b> pouco ou nenhum impacto da disrupção em seus setores. Ainda mais, 44% dizem que não visualizam qualquer urgência em mudar suas empresas em resposta à disrupção. Ao todo, apenas 27% dizem que estão passando por uma disrupção signiﬁcativa, dado o dilúvio que muitos previram. O que aconteceu com as ameaças evocadas pela “uberização de tudo”, o triunfo da economia compartilhada e a remoção dos limites dos setores?</p></div>
<div class="col-sm-4"><p><b>Artes: <?php echo $artesPlasticas; ?>; Teatro: <?php echo $teatro; ?>; Dança: <?php echo $danca; ?>; Música: <?php echo $musica; ?>; Cinema: <?php echo $cinema; ?>; Literatura: <?php echo $literatura; ?>; Performance: <?php echo $performance; ?> </b>  Setenta e dois por cento dos diretores nos dizem que as empresas tradicionais lideram a disrupção em seu setor (veja a Figura 2). Mesmo em setores com turbulência acima da média, como os serviços ﬁnanceiros, onde as startups têm uma presença relativamente maior, a maior parte da mudança é creditada às inovações das empresas tradicionais. </p></div>


</div>
</div>

<!--O aumento da concorrência com outros setores não aconteceu na escala prevista. Apenas 23% dos executivos dizem que concorrentes externos ao seu setor são uma fonte signiﬁcativa de disrupção. Os gigantes digitais continuam a concentrar seu poder em alguns setores, mas, de acordo com os executivos pesquisados, eles não estão causando disrupção.-->
<div class="container row border border-bottom-0 border-right-0 border-left-0">
            <div style="margin-top:30px; margin-bottom:10px">
                <h4>Equipamentos Culturais em <?php echo $local?></h4>
            </div>
        </div>
        
<div class="container-fluid" style="overflow: auto; height:300px; margin-bottom:50px">
    <div>
    <table class="table table-striped" style="font-family: 'Titillium Web', sans-serif; font-size: 12px; color:#808080">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Tipo</th>
        <th>Capacidade</th>
        <th>Áreas</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php while ($tbl7 = $result7->fetch_assoc())
            {
                
                $mapCulCodigo = $tbl7["id"];
                $mapCulNome = $tbl7["Nome"];
                $mapCulTipo = $tbl7["Tipo"];
                $mapCulAreas = $tbl7["Areas"];
                $mapCulCoordenada = $tbl7["Coordenada"];
                $mapCulEmail = $tbl7["Email"];
                $mapCulTelefone = $tbl7["Telefone"];
                $mapCulCapacidade = $tbl7["Capacidade"];
                $mapCulCep = $tbl7["CEP"];
                $mapCulLogradouro = $tbl7["Logradouro"];
                $mapCulNumero = $tbl7["Numero"];
                $mapCulComplemento = $tbl7["Complemento"];
                $mapCulBairro = $tbl7["Bairro"];
                $mapCulRa = $tbl7["RA"];
                $mapCulEstado = $tbl7["Estado"];
                $mapCulFuncionamento = $tbl7["Funcionamento"];
                $mapCulSite = $tbl7["Site"];
                $mapCulFacebook = $tbl7["Facebook"];
                $mapCulTwitter = $tbl7["Twitter"];
                $mapCulGoogle = $tbl7["Google"];
                
                echo "<tr>
        <td>$mapCulNome</td>
        <td>$mapCulTipo</td>
        <td>$mapCulCapacidade</td>
        <td>$mapCulAreas</td>
        <td>$mapCulEmail</td>
        
        
      </tr>";
               }?>
      
      
    </tbody>
  </table>
  
  
    </div>
</div>


<div class="container row border border-bottom-0 border-right-0 border-left-0">
            <div style="margin-top:10px; margin-bottom:0px">
                <h4>Dados Demográficos</h4>
            </div>
</div>

<div class="row">

<div class="col-sm-4" style="margin-top:10px">
                    <div class="card  mb-3" style="max-width: 44rem; border-style: solid; border-top-width: 5px; border-top-color: #696969;">
                        <div class="card-header" style="font-family: 'Titillium Web', sans-serif; font-size: 15px; color:#696969">Utilização de Transportes</div>
                        <div class="card-body text-primary">
                            <!--h5 class="card-title" style="font-family: 'Titillium Web', sans-serif; font-size: 20px; color:#696969">Utilização de Transportes</h5-->
                            <?php 
                            $Codigo1 = 1;
                            echo "<script>";
                            echo $desenho;
                            echo "</script>";
                            echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo1' id='dashboardGeral$Codigo1' width='1400' height='1400' style='margin-left:0px; margin-right:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivo($Codigo1,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo1');</script>";
                
                echo "<!-- The Modal -->";
                echo "<div class='modal fade' id='RmyModal$Codigo1'>";
                echo "<div class='modal-dialog'>";
                echo "<div class='modal-content'>";
      
                echo "<!-- Modal Header -->";
                echo "<div class='modal-header'>";
                echo "<h4 class='modal-title'>Formulário</h4>";
                echo "<button type='button' class='close' data-dismiss='modal'>";
                echo "</button>";
                echo "</div>";
        
                echo "<!-- Modal body -->";
                echo "<div class='modal-body'>";
                echo "<div>";
                echo "<form id='formulario$Codigo1'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo1$Codigo1' value='$transOnibus'>";
                




                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo2$Codigo1' value='$natMinasGerais'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo3$Codigo1' value='$natMatoGrossoDoSul'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo4$Codigo1' value='$FormQuem'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo5$Codigo1' value='$FormOQue'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo6$Codigo1' value='$FormOnde'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo7$Codigo1' value='$FormData'>";
                echo "<input type='text' required='required' name='numbers' pattern='[0-9]+$' id='campo8$Codigo1' value='$FormQuanto'>";
                
                echo "<select id='tipo$Codigo1' name='numbers'>
                <option value='$FormComo'>$FormComo</option>
                <option value='$FormPorque'>$FormPorque</option>
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
                <option value='7'>7</option>
                <option value='8'>8</option>
                
                </select>";
                
    
                echo "<input type='submit' value='Enviar'>";
                echo "</form>";
                
                
                echo "<script>var form = document.getElementById('formulario$Codigo1');
var campo1$Codigo1 = document.getElementById('campo1$Codigo1');
var campo2$Codigo1 = document.getElementById('campo2$Codigo1');
var campo3$Codigo1 = document.getElementById('campo3$Codigo1');
var campo4$Codigo1 = document.getElementById('campo4$Codigo1');
var campo5$Codigo1 = document.getElementById('campo5$Codigo1');
var campo6$Codigo1 = document.getElementById('campo6$Codigo1');
var campo7$Codigo1 = document.getElementById('campo7$Codigo1');
var campo8$Codigo1 = document.getElementById('campo8$Codigo1');



var tipo$Codigo1 = document.getElementById('tipo$Codigo1');




form.addEventListener('submit', function(e) {

desenhoScriptivo(tipo$Codigo1.value,500,1000,'#ffffff',campo1$Codigo1.value,campo2$Codigo1.value,campo3$Codigo1.value,campo4$Codigo1.value,campo5$Codigo1.value,campo6$Codigo1.value,campo7$Codigo1.value,campo8$Codigo1.value,'#000000',120,'dashboardGeral$Codigo1');

    

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
  
  
                ?>
                        </div>
                    </div>
                </div>
                
<div class="col-sm-4" style="margin-top:10px">
                    <div class="card  mb-3" style="max-width: 44rem; border-style: solid; border-top-width: 5px; border-top-color: #696969;">
                        <div class="card-header" style="font-family: 'Titillium Web', sans-serif; font-size: 15px; color:#696969">Faixa Etária</div>
                        <div class="card-body text-primary">
                            <!--h5 class="card-title" style="font-family: 'Titillium Web', sans-serif; font-size: 20px; color:#696969">Faixa Etária</h5-->
                            
                            
                            <?php
                            $Codigo2 = 2;
                            echo "<script>";
                            echo $desenho;
                            echo "</script>";
                            echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo2' id='dashboardGeral$Codigo2' width='2000' height='2000' style='margin-left:0px; margin-right:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivo($Codigo2,500,1000,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo2');</script>";
                ?>
                
                
                
                        </div>
                    </div>
                </div>
                
<div class="col-sm-4" style="margin-top:10px; margin-bottom:40px">
                    <div class="card  mb-3" style="max-width: 44rem; border-style: solid; border-top-width: 5px; border-top-color: #696969;">
                        <div class="card-header" style="font-family: 'Titillium Web', sans-serif; font-size: 15px; color:#696969">Naturalidade</div>
                        <div class="card-body text-primary">
                            <!--h5 class="card-title" style="font-family: 'Titillium Web', sans-serif; font-size: 20px; color:#696969">Naturalidade</h5-->
                            
                            
                            <?php
                            $Codigo3 = 3;
                            echo "<script>";
                            echo $desenho;
                            echo "</script>";
                            echo "<canvas class='w-100' data-toggle='modal' data-target='#myModal$Codigo3' id='dashboardGeral$Codigo3' width='1400' height='1400' style='margin-left:0px; margin-right:0px; background-color: #ffffff'>";
                echo "</canvas>";
                
                echo "<script>desenhoScriptivo($Codigo3,1200,0,'#ffffff',1,2,3,4,5,6,7,8,'#000000',120,'dashboardGeral$Codigo3');</script>";
                ?>
                        </div>
                    </div>
                </div>
</div>

<div class="container row border border-bottom-0 border-right-0 border-left-0">
            <div style="margin-top:10px; margin-bottom:0px">
                <h4>Sobre a RA</h4>
            </div>
</div>

<div class="row" style="margin-top:10px; margin-bottom:30px">
<div class="col-sm-12">
                    <p><?php echo $descricao;?>

                    </p>
</div>

<div class="col-sm-12" style="background-color:#ffffff; margin-top: 0px; box-shadow: 0px 1px 1px #A9A9A9;">
    <canvas class="w-100" id="dashboardGeral00" width="2500" height="500" style="margin-bottom:20px"></canvas>
    <!--script language="JavaScript" src="scripts/guignard2.js"></script-->
    <script>        var mostrar = document.getElementById("dashboardGeral00");
        var dashPrimeiro = mostrar.getContext("2d");
        
        dashPrimeiro.globalAlpha = 1;
        
        function arcoTotal(){
        dashPrimeiro.beginPath();
        dashPrimeiro.strokeStyle = '#ce881d';
        dashPrimeiro.fillStyle = "#c7a9c3";
        //dashPrimeiro.lineWidth = 0.4;
        
        //dashPrimeiro.strokeRect(a,b,c,d);
        
        dashPrimeiro.globalAlpha = 1;
        dashPrimeiro.arc(1000,900,800,0,Math.PI,true);
        dashPrimeiro.arc(1000,900,795,0,Math.PI,true);
        dashPrimeiro.arc(1000,900,790,0,Math.PI,true);
        dashPrimeiro.arc(1000,900,785,0,Math.PI,true);
        dashPrimeiro.stroke();
        
        dashPrimeiro.beginPath();
        dashPrimeiro.globalAlpha = 0.6;
        dashPrimeiro.fillStyle = '#b63c3c';
        dashPrimeiro.arc(1000,900,780,0,Math.PI,true);
        dashPrimeiro.fill();
        
        }
        
        
        //arcoTotal();
        
        /*var ano1995 = 200;
        var ano2005 = 400;
        var ano2015 = 600;
        var ano2025 = 800;
        var ano2035 = 1000;*/
        
        var ano1995 = <? echo $resultadoPoliticasPublicas ?>;
        var ano2005 = <? echo $resultadoGeopolitico ?>;
        var ano2015 = <? echo $resultadoTecnologico ?>;
        var ano2025 = <? echo $resultadoMercado ?>;
        var ano2035 = <? echo $resultadoEquipamentos ?>*<?php echo $FormOnde?>;
        
        
        function tira(x,y,cor,a,a1,b,b1,c,c1,d,d1,e,e1){
        dashPrimeiro.beginPath();
        dashPrimeiro.globalAlpha = 0.1;
        dashPrimeiro.lineWidth = 2;

        dashPrimeiro.fillStyle = cor;
        dashPrimeiro.moveTo(x, y+200);
        dashPrimeiro.quadraticCurveTo(x+0, y+a1, x+a, y+200);
        dashPrimeiro.lineTo(x+400, y+b1, x+b, y+200);
        dashPrimeiro.quadraticCurveTo(x+400, y+c1, x+c, y+200);
        dashPrimeiro.quadraticCurveTo(x+800, y+d1, x+d, y+200);
        dashPrimeiro.quadraticCurveTo(x+800, y+e1, x+e, y+200);
        
        
        dashPrimeiro.lineTo(x+ano2035, y+300);
        dashPrimeiro.quadraticCurveTo(x+800, y+400, x+ano2025, y+300);
        dashPrimeiro.quadraticCurveTo(x+800, y+200, x+ano2015, y+300);
        dashPrimeiro.lineTo(x+400, y+400, x+ano2005, y+300);
        dashPrimeiro.quadraticCurveTo(x+400, y+200, x+ano1995, y+300);
        dashPrimeiro.quadraticCurveTo(x+0, y+400, x, y+300);

        dashPrimeiro.stroke();
        dashPrimeiro.fill();
        }
        
        
        function tira2(x,y,cor,a0,a1,a2,a3,b0,b1,b2,b3,c0,c1,c2,c3,d0,d1,d2,d3,e0,e1,e2,e3,f0,f1,f2,f3,g0,g1,g2,g3,h0,h1,h2,h3,i0,i1,i2,i3){
        dashPrimeiro.beginPath();
        dashPrimeiro.globalAlpha = 0.3;

        dashPrimeiro.fillStyle = cor;
        dashPrimeiro.moveTo(x, y+200);
        dashPrimeiro.quadraticCurveTo(x+a0, y+a1, x+a2, y+a3);
        dashPrimeiro.quadraticCurveTo(x+b0, y+b1, x+b2, y+b3);
        dashPrimeiro.quadraticCurveTo(x+c0, y+c1, x+c2, y+c3);
        dashPrimeiro.quadraticCurveTo(x+d0, y+d1, x+d2, y+d3);
        dashPrimeiro.quadraticCurveTo(x+e0, y+e1, x+e2, y+e3);
        
        
        dashPrimeiro.lineTo(x+ano2035, y+300);
        dashPrimeiro.quadraticCurveTo(x+f0, y+f1, x+f2, y+f3);
        dashPrimeiro.quadraticCurveTo(x+g0, y+g1, x+g2, y+g3);
        dashPrimeiro.quadraticCurveTo(x+h0, y+h1, x+h2, y+h3);
        dashPrimeiro.quadraticCurveTo(x+i0, y+i1, x+i2, y+i3);
        dashPrimeiro.quadraticCurveTo(x+0, y+400, x, y+300);

        dashPrimeiro.stroke();
        dashPrimeiro.fill();
        }
        
        for(i=0;i<5;i++){
        
        tira(300+(50*i+<? echo $resultadoPoliticasPublicas ?>),70,"#236698",ano1995+(8*i),i+<? echo $resultadoGeopolitico ?>,ano2005+(5*i+<? echo $resultadoTecnologico ?>),i*<?php echo $FormOnde?>,ano2015+(12*i),i*82,ano2025+(9*i),i*34,ano2035+(83*i),i*80);
        tira(300+(50*i),70,"#236698",ano1995+(8*i),i*20,ano2005+(5*i),i*12,ano2015+(12*i),i*82,ano2025+(9*i),-154,ano2035+(83*i),-300);
        }
        
        
        for(i=0;i<7;i++){
        tira(100,20,"#800033",ano1995+(8*i+<? echo $resultadoPoliticasPublicas ?>),i*20,ano2005+(5*i),i*12,ano2015+(12*i),i*<?php echo $FormOnde?>,ano2025+(9*i),i*34,ano2035+(33*i),i*8);
        tira(100+(30*i),50+(8*i),"#0a494b",ano1995+(8*i),i*20,ano2005+(5*i),i*12,ano2015+(12*i),i*<?php echo $FormOnde?>,ano2025+(9*i),i*34,ano2035+(33*i),i*8);
        }
        
        
        for(i=0;i<<?php echo $FormOnde?>;i++){
        tira(100,20,"#b63c3c",(8*i+<? echo $resultadoMercado ?>),i*20,ano2005+(5*i),i*12,ano2015+(12*i),i*<?php echo $FormOnde?>,ano2025+(9*i),i*34,<?php echo $FormOnde?>+(33*i),i*8);
        tira(100+(30*i),50+(8*i),"#b63c3c",ano1995+(8*i),i*20,ano2005+(5*i),i*12,ano2015+(12*i),i*<?php echo $FormOnde?>,<?php echo $FormOnde?>+(9*i),i*34,<?php echo $FormOnde?>+(33*i),i*8);
        }

        
        function regua(){
        dashPrimeiro.beginPath();
        dashPrimeiro.globalAlpha = 1;
        dashPrimeiro.lineWidth = 1;
        dashPrimeiro.strokeStyle = "#000000";
        dashPrimeiro.moveTo(100,490);
        dashPrimeiro.lineTo(100,10);
        dashPrimeiro.lineTo(90,20);
        dashPrimeiro.moveTo(100,490);
        dashPrimeiro.lineTo(1900,490);
        dashPrimeiro.lineTo(1890,500);
        dashPrimeiro.stroke();
        }
        

        
        
        regua();
        var anos = [<? echo $resultadoPoliticasPublicas ?>,"1990","1995", "2000", "2005","2010","2015","2020","2025","2030","2035"];
        
        for(i = 1; i <11; i++){
            
        dashPrimeiro.beginPath();
        dashPrimeiro.globalAlpha = 1;
        dashPrimeiro.lineWidth = 10;
        var x = 100;
        var y = 490;
        
        dashPrimeiro.moveTo(x+(i*160),y);
        dashPrimeiro.lineTo(x+(i*160),y-10);
        dashPrimeiro.stroke();
        
        
        dashPrimeiro.font = '20px Roboto, sans-serif';
        dashPrimeiro.fillStyle = '#b63c3c';
        dashPrimeiro.textAlign = 'right'; 
        dashPrimeiro.fillText(anos[i], x+(i*160),y-30);
        dashPrimeiro.fill();
        
        }
        
        function online(){
            
            
                dashPrimeiro.fillStyle = "#95d244";
                dashPrimeiro.beginPath();
                dashPrimeiro.arc(1900, 30, 10, 0, 2 * Math.PI);
                dashPrimeiro.fill();
                dashPrimeiro.stroke();
        }
        online();

        </script>
   
    <div class="row">
<div class="col-sm-2"></div>
    <div class="col-sm-8">
    <p class=""><small><i>O gráfico acima mostra uma prospecção sobre a matriz cultural da cidade entre 1990 a 2035. A gradação entre vermelho e azul demonstra a interferência da tecnologia em todo o setor (produção, linguagem, comunicação) da artesania à automatização.</i></small></p>
    </div>
<div class="col-sm-2"></div>
    </div>
    </div>
    
    
</div>
                    
                    

<div class="container row border border-bottom-0 border-right-0 border-left-0">
            <div style="margin-top:10px; margin-bottom:0px">
                <h4>Localização</h4>
            </div>
</div>

<div class="row">
<div class="col-sm-12" style="margin-top:10px">
                    <div class="card  mb-3" style="border-style: solid; border-top-width: 5px; border-top-color: #4B0082;">
                        <div class="card-header" style="font-family: 'Titillium Web', sans-serif; font-size: 15px; color:#4B0082">Mapa</div>
                        <div class="mapid3 card-body text-primary">
                            <div class="mapid2 center-block contraste" id="mapid" style="padding-left:0px;pointer-events:none;"></div>
<script>

	var mymap = L.map('mapid').setView([<?php echo $coordenadas?>], 13);

	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 19,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

	/*L.marker([<?php echo $coordenadas?>]).addTo(mymap)
		.bindPopup("<b>Jesus Cristo</b><br />_O Caminho, A Verdade e A Vida").openPopup();*/

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



                        </div>
                    </div>
                </div>
</div>
                
</div>

<div class="container mt-3" style="padding-bottom: 50px; align:center">
        <!--h2>Modal Example</h2-->
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Recalcular
        </button>
        
        <button onclick="myFunctione()" type="button" class="btn btn-success">
            Imprimir
        </button>
        

        
        

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                        <form method="POST" action="../amemAlpha/index2.php" target="_top" style="margin-top:20px; margin-left:50px; margin-right:50px; margin-bottom:20px">

                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-sm" id="smFormGroupInput" placeholder="<?php echo $FormQuem?>" required name="quem" value="<?php echo $FormQuem?>">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">

                                        <select name="oQue" type="text" class="form-control form-control-sm" id="smFormGroupInput" placeholder="O que?">
                                            <option selected value="<?php echo $FormOQue ?>"><?php echo $linguagem ?></option>
                                            <option value="1">Artes Plásticas</option>
                                            <option value="2">Teatro</option>
                                            <option value="3">Dança</option>
                                            <option value="4">Música</option>
                                            <option value="5">Cinema</option>
                                            <option value="6">Literatura</option>
                                            <option value="7">Performance</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">

                                        <select name="onde" type="text" class="form-control form-control-sm" id="smFormGroupInput" placeholder="Onde?">
                                            <option selected value="<?php echo $FormOnde ?>"><?php echo $local ?></option>
                                            <option value="1">RA I - Plano Piloto</option>
                                            <option value="2">RA II - Gama</option>
                                            <option value="3">RA III - Taguatinga</option>
                                            <option value="4">RA IV – Brazlândia</option>
                                            <option value="5">RA V – Sobradinho</option>
                                            <option value="6">RA VI – Planaltina</option>
                                            <option value="7">RA VII – Paranoá</option>
                                            <option value="8">RA VIII – Núcleo Bandeirante</option>
                                            <option value="9">RA IX – Ceilândia</option>
                                            <option value="10">RA X – Guará</option>
                                            <option value="11">RA XI – Cruzeiro</option>
                                            <option value="12">RA XII – Samambaia</option>
                                            <option value="13">RA XIII – Santa Maria</option>
                                            <option value="14">RA XIV – São Sebastião</option>
                                            <option value="15">RA XV – Recanto das Emas</option>
                                            <option value="16">RA XVI – Lago Sul</option>
                                            <option value="17">RA XVII – Riacho Fundo</option>
                                            <option value="18">RA XVIII – Lago Norte</option>
                                            <option value="19">RA XIX – Candangolândia</option>
                                            <option value="20">RA XX – Águas Claras</option>
                                            <option value="21">RA XXI – Riacho Fundo II</option>
                                            <option value="22">RA XXII – Sudoeste / Plano Piloto / Octogonal</option>
                                            <option value="23">RA XXIII – Varjão</option>
                                            <option value="24">RA XXIV – Park Way</option>
                                            <option value="25">RA XXV – SCIA – Estrutural</option>
                                            <option value="26">RA XXVI – Sobradinho II</option>
                                            <option value="27">RA XXVII – Jardim Botânico</option>
                                            <option value="28">RA XXVIII – Itapoã</option>
                                            <option value="29">RA XXIX – SIA</option>
                                            <option value="30">RA XXX – Vicente Pires</option>
                                            <option value="31">RA XXXI – Fercal</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">

                                    
                                    
                                    
                                    <div class="col-sm-12">

                                        <select type="text" class="form-control form-control-sm" name="data" placeholder="Data">
                                            <option selected value="<?php echo $FormData?>"><?php echo $mes?></option>
                                            <option value="1">Janeiro</option>
                                            <option value="2">Fevereiro</option>
                                            <option value="3">Março</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Junho</option>
                                            <option value="7">Julho</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>

                                        </select>

                                    </div>
                                    
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control form-control-sm" id="smFormGroupInput" placeholder="Quanto?" required name="quanto">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-sm" id="smFormGroupInput" placeholder="Como?" required name="como">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-sm" id="smFormGroupInput" placeholder="Por que?" required name="porque">
                                    </div>
                                </div>

                                <button type="submit" class="btn" style="background-color: #ffff00; color:#162970;">Computar</button>
                            </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>


                                <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
                                </body>