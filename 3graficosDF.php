<?php 
include("pizza.php");
include("pizza8.php");
include("corda.php");
include("naturalidade.php");


$desenho = "function desenhoScriptivo(tipo,x,y,corFundo,valor1,valor2,valor3,valor4,valor5,valor6,valor7,valor8,cor,escala,onde){
    
    var exibir = document.getElementById(onde);
    var dashGeral = exibir.getContext('2d');
    
    dashGeral.globalAlpha = 1;
    
    dashGeral.clearRect(0,0,8400,5800);
    var maiorValor = Math.max(valor1,valor2,valor3,valor4,valor5,valor6,valor7,valor8);
    var formula = (100 * escala*4) / (maiorValor);
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#ffffff';
    dashGeral.fillRect(0,0,1400,1000);
    
    
function cuboDesconstruido(ax1,ay1,ax2,ay2,ax3,ay3,ax4,ay4,cor){
    
    dashGeral.beginPath();
    dashGeral.fillStyle = cor;
    dashGeral.moveTo(ax1,ay1);
    dashGeral.lineTo(ax2,ay2);
    dashGeral.lineTo(ax3,ay3);
    dashGeral.lineTo(ax4,ay4);
    dashGeral.closePath();
    dashGeral.fill();
    }
    
    
    
    

//cuboDesconstruido(1000,500,1100,400,1200,500,1100,600);



    
    
    /*function naturalidade(){
    
    function barra(x,y,multiplicador,nat,nome){
        dashGeral.beginPath();
        
        dashGeral.fillStyle = '#236698';
        dashGeral.fillRect(x+multiplicador,600+y,70,-nat/100);
        
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#800033';
        dashGeral.fillText(nome, x+multiplicador-10,690+y);
        dashGeral.fill();
        
        dashGeral.beginPath();
        dashGeral.font = '50px Roboto, sans-serif';
        dashGeral.fillStyle = '#000000';
        dashGeral.fillText((nat).toLocaleString('pt-BR'), x+multiplicador-10,580-(nat/100)+y);
        dashGeral.fill();
        
    }
    
    var xBarra = -100;
        var espEntre = 150;
        
        var y  = -300;
        barra(xBarra,y,1*espEntre,natAcre,'AC');
        barra(xBarra,y,2*espEntre,natAlagoas,'AL');
        barra(xBarra,y,3*espEntre,natAmapa,'AP');
        barra(xBarra,y,4*espEntre,natAmazonas,'AM');
        barra(xBarra,y,5*espEntre,natBahia,'BA');
        barra(xBarra,y,6*espEntre,natCeara,'CE');
        barra(xBarra,y,7*espEntre,natEspiritoSanto,'ES');
        barra(xBarra,y,8*espEntre,natGoias,'GO');
        barra(xBarra,y,9*espEntre,natMaranhao,'MA');
        
        var y  = 200;
        barra(xBarra,y,1*espEntre,natMatoGrosso,'MT');
        barra(xBarra,y,2*espEntre,natMatoGrossoDoSul,'MS');
        barra(xBarra,y,3*espEntre,natMinasGerais,'MG');
        barra(xBarra,y,4*espEntre,natPara,'PA');
        barra(xBarra,y,5*espEntre,natParaiba,'PB');
        barra(xBarra,y,6*espEntre,natParana,'PR');
        barra(xBarra,y,7*espEntre,natPernambuco,'PE');
        barra(xBarra,y,8*espEntre,natPiaui,'PI');
        barra(xBarra,y,9*espEntre,natRioDeJaneiro,'RJ');
        
        var y  = 700;
        barra(xBarra,y,1*espEntre,natRioGrandeDoNorte,'RN');
        barra(xBarra,y,2*espEntre,natRioGrandeDoSul,'RS');
        barra(xBarra,y,3*espEntre,natRondonia,'RO');
        barra(xBarra,y,4*espEntre,natRoraima,'RR');
        barra(xBarra,y,5*espEntre,natSantaCatarina,'SC');
        barra(xBarra,y,6*espEntre,natSaoPaulo,'SP');
        barra(xBarra,y,7*espEntre,natSergipe,'SE');
        barra(xBarra,y,8*espEntre,natTocantins,'TO');
        barra(xBarra,y,9*espEntre,natExterior,'EX');
        //barra(xBarra,y,9*espEntre,natNaoSabe,'NS');
        
        

    };*/
    
    $pizza;
    $pizza8;
    $corda;
    $naturalidade;
    $idades;
    
    


    
    
function lua5(){
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#236698';
    dashGeral.arc(700,1000,700,0,Math.PI,true);
    dashGeral.fill();
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#ffffff';
    dashGeral.ellipse(700, 700, 500, 300, Math.PI, 0, Math.PI);
    dashGeral.fill();
}


function perspectiva(x,y,h,v,cor,alfa){
    dashGeral.beginPath();
    dashGeral.fillStyle = cor;
    dashGeral.globalAlpha = alfa;
    dashGeral.strokeRect(x,y,h,v);
}
    
    
    if(tipo == 1){
    pizza(700,600,$transOnibus,$transAutomovel,$transUtilitario,$transMetro,$transMotocicleta,$transBicicleta,$transAPe,$transOutros);
    
    }else if(tipo == 2){
        idades($popCriancas,$popJovens,$popAdultos,$popIdosos);
        
    }else if(tipo == 3){
        naturalidade($natAcre,$natAlagoas,$natAmapa,$natAmazonas,$natBahia,$natCeara,$natEspiritoSanto,$natGoias,$natMaranhao,$natMatoGrosso,$natMatoGrossoDoSul,$natMinasGerais,$natPara,$natParaiba,$natParana,$natPernambuco,$natPiaui,$natRioDeJaneiro,$natRioGrandeDoNorte,$natRioGrandeDoSul,$natRondonia,$natRoraima,$natSantaCatarina,$natSaoPaulo,$natSergipe,$natTocantins,$natExterior,$natNaoSabe,$popCriancas,$popJovens,$popAdultos,$popIdosos,$transOnibus,$transAutomovel,$transUtilitario,$transMetro,$transMotocicleta,$transBicicleta,$transAPe,$transOutros);
        
    }else if(tipo == 4){
        pizza(700,700,$transOnibus,$transAutomovel,$transUtilitario,$transMetro,$transMotocicleta,$transBicicleta,$transAPe,$transOutros);
    }else if(tipo == 5){
        //lua5();
        //corda(45,34);
        var yy = 200;
        
        pizza8(200,yy,'Tecnológico',0,'Inserção do projeto ao','pensamento computacional',$resultadoTecnologico,0,0,0,0,0,0,100-$resultadoTecnologico,$resultadoTecnologico-$FormOnde);
        
        pizza8(700,yy,'Geopolítico',10,'Proximidade conceitual','das inovações de linguagem',0,$resultadoGeopolitico,0,0,0,0,0,100-$resultadoGeopolitico,$resultadoGeopolitico);
        pizza8(1200,yy,'Equipamentos',0,'Qualidade dos','equipamentos culturais',0,0,$resultadoSocioeconomico+$FormOnde,0,0,0,0,100-$resultadoSocioeconomico+$FormOnde,$resultadoSocioeconomico+$FormOnde);
        
        /*for(i = 0; i < 10; i++){
        perspectiva(800-(i*100),700-(450/i),20+(i*4),200+(i*8),'#ff0000',0.3);
        perspectiva(900-(i*100),700-(450/i),20+(i*4),200+(i*8),'#ff0000',0.3);
        perspectiva(1200-(i*100),700-(450/i),20+(i*4),200+(i*8),'#ff0000',0.3);
        perspectiva(1500-(i*100),300-(450/i),20+(i*4),200+(i*8),'#ff0000',0.3);
        perspectiva(1700-(i*100),400-(450/i),20+(i*4),200+(i*8),'#ff0000',0.3);
        }*/
        
    }
    else if(tipo == 6){
        var yy = 200;
        pizza8(200,yy,'Mercado',50,'Inserção no mercado','do Distrito Federal',0,0,0,($FormOnde-$resultadoMercado),0,0,0,100-($FormOnde-$resultadoMercado),100-($FormOnde-$resultadoMercado));
        
        pizza8(700,yy,'Políticas Públicas',-20,'Adequação do projeto','às políticas de estado',300,54,66,87,77,45,45,$FormOnde*2,$resultadoPoliticasPublicas-($FormOnde*2));
        
        pizza8(1200,yy,'Socioeconômico',-20,'Acesso do público à','linguagem do projeto',0,0,$FormOnde,0,0,0,0,100-$FormOnde,$FormOnde);


    }
    
    else{
    

    var a = 200; var b = 100;
        cuboDesconstruido(1000,500,1100,450,1200,500,1100,550,'#4169E1');
        cuboDesconstruido(1000+a,500+b,1100+a,450+b,1200+a,500+b,1100+a,550+b,'#4169E1');
        cuboDesconstruido(1000+a,500+b*2,1100+a,450+b*2,1200+a,500+b*2,1100+a,550+b*2,'#4169E1');
        
        for(i = 3; i <10; i++){
        for(o = 4; o < 20; o++){
        cuboDesconstruido(1200+o,500+b*(i*o),1100+a,550+b*(i*o),1100+a,660+b*(i*o),1200+a,610+b*(i*o),'#FF6347');
            
        }
        }
    }
    
    
    
    
    
}

    
    ";

?>


<?php $grafo20 = "function barraDivergente(tipo,x,y,corFundo,valor1,valor2,valor3,valor4,valor5,valor6,valor7,valor8,cor,escala,onde,natAcre,natAlagoas,natAmapa,natAmazonas){
    
    var exibir = document.getElementById(onde);
    var dashGeral = exibir.getContext('2d');
    
    dashGeral.globalAlpha = 1;
    
    dashGeral.clearRect(0,0,8400,5800);
    var maiorValor = Math.max(valor1,valor2,valor3,valor4,valor5,valor6,valor7,valor8);
    var formula = (100 * escala*4) / (maiorValor);
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#071739';
    dashGeral.fillRect(0,0,5600,4000);
}"; 

?>
    
    