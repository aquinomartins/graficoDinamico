<?php 
include("pizza.php");
include("corda.php");


$desenho = "function desenhoScriptivo(tipo,x,y,corFundo,valor1,valor2,valor3,valor4,valor5,valor6,valor7,valor8,cor,escala,onde,natAcre,natAlagoas,natAmapa,natAmazonas,natBahia,natCeara,natEspiritoSanto,natGoias,natMaranhao,natMatoGrosso,natMatoGrossoDoSul,natMinasGerais,natPara,natParaiba,natParana,natPernambuco,natPiaui,natRioDeJaneiro,natRioGrandeDoNorte,natRioGrandeDoSul,natRondonia,natRoraima,natSantaCatarina,natSaoPaulo,natSergipe,natTocantins,natExterior,natNaoSabe,popCriancas,popJovens,popAdultos,popIdosos,transOnibus,transAutomovel,transUtilitario,transMetro,transMotocicleta,transBicicleta,transAPe,transOutros){
    
    var exibir = document.getElementById('g');
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


// ______________________________ U1

    function u1(){
    
    dashGeral.globalAlpha = 1;
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#ff0000';
    dashGeral.fillRect(x-(escala*4)-escala,y-escala,escala*8+(escala*2),escala*8+(escala*2));
    
    dashGeral.beginPath();
    dashGeral.fillStyle = cor;
    dashGeral.fillRect(x,y+(escala*1),-(formula/100)*valor1,escala);
    dashGeral.fillRect(x,y+(escala*2),(formula/100)*valor2,escala);
    dashGeral.fillRect(x,y+(escala*3),-(formula/100)*valor3,escala);
    dashGeral.fillRect(x,y+(escala*4),(formula/100)*valor4,escala);
    dashGeral.fillRect(x,y+(escala*5),-(formula/100)*valor5,escala);
    dashGeral.fillRect(x,y+(escala*6),(formula/100)*valor6,escala);
    dashGeral.fillRect(x,y+(escala*7),(formula/100)*valor7,escala);
    dashGeral.fillRect(x,y+(escala*8),(formula/100)*valor8,escala);
    };
    
    
// ______________________________ U2

    function u2(){
    
    dashGeral.globalAlpha = 1;
    
    dashGeral.beginPath();
    ccc
    //dashGeral.fillRect(x-(escala*4)-escala,y-escala,escala*8+(escala*2),escala*8+(escala*2));
    
    dashGeral.beginPath();
    dashGeral.fillStyle = cor;
    dashGeral.fillRect(x,y+(escala*1),-(formula/100)*valor1,escala);
    dashGeral.fillRect(x,y+(escala*2),(formula/100)*valor2,escala);
    dashGeral.fillRect(x,y+(escala*3),-(formula/100)*valor3,escala);
    dashGeral.fillRect(x,y+(escala*4),(formula/100)*valor4,escala);
    dashGeral.fillRect(x,y+(escala*5),-(formula/100)*valor5,escala);
    dashGeral.fillRect(x,y+(escala*6),(formula/100)*valor6,escala);
    dashGeral.fillRect(x,y+(escala*7),(formula/100)*valor7,escala);
    dashGeral.fillRect(x,y+(escala*8),(formula/100)*valor8,escala);
    
    };
    
    
// ______________________________ U3

    function u3(){
    
    dashGeral.globalAlpha = 1;
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#083363';
    //dashGeral.fillRect(x-(escala*4)-escala,y-escala,escala*8+(escala*2),escala*8+(escala*2));
    
    dashGeral.beginPath();
    dashGeral.fillStyle = cor;
    dashGeral.arc(x,y+(escala*1),200,0,Math.PI,true);
    dashGeral.fill();
    dashGeral.fillRect(x,y+(escala*2),(formula/100)*valor2,escala);
    dashGeral.fillRect(x,y+(escala*3),-(formula/100)*valor3,escala);
    dashGeral.fillRect(x,y+(escala*4),(formula/100)*valor4,escala);
    dashGeral.fillRect(x,y+(escala*5),-(formula/100)*valor5,escala);
    dashGeral.fillRect(x,y+(escala*6),(formula/100)*valor6,escala);
    dashGeral.fillRect(x,y+(escala*7),(formula/100)*valor7,escala);
    dashGeral.fillRect(x,y+(escala*8),(formula/100)*valor8,escala);
    };
    
    
// ______________________________ U4 - Coluna

    function u4(){
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#ffd700';
    dashGeral.moveTo(100,100);
    dashGeral.lineTo(7000,3900);
    dashGeral.lineTo(5000,1000);
    dashGeral.lineTo(2000,1000);
    dashGeral.closePath();
    dashGeral.fill();
    
    dashGeral.beginPath();
    dashGeral.globalAlpha = 0.3;
    dashGeral.fillStyle = '#ff0000';
    dashGeral.strokeStyle = '#000000';
    dashGeral.lineWidth = 40;
    dashGeral.arc(1000,1000,400,0,2*Math.PI,true);
    dashGeral.fill();
    dashGeral.stroke();
    
    //dashGeral.globalAlpha = 1;
    
    
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#083363';
    //dashGeral.fillRect(-4000,-2000,8000,4000);
    
    var xLocal = 600;
    var colunaLocal = 55;
    escala = 60;
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#ffffff';
    //dashGeral.rotate(2 * Math.PI / 180);
    dashGeral.font = '70px Georgia';
    dashGeral.fillText('Utilização de Transportes', 100, 400);
    
    dashGeral.fill();
    
    dashGeral.beginPath();
    
    function barraLocal(valor,multiplicador){dashGeral.fillStyle = '#00F5FF';
    dashGeral.fillRect(x+(escala*multiplicador),y+xLocal,escala,-(formula/colunaLocal)*valor);
    dashGeral.fillStyle = '#104E8B';
    dashGeral.moveTo(x+(escala*multiplicador),y+xLocal);
    dashGeral.lineTo(x+(escala*multiplicador),y+xLocal-(formula/colunaLocal)*valor);
    dashGeral.lineTo(x+(escala*multiplicador)-20,y+xLocal-(formula/colunaLocal)*valor-30);
    dashGeral.lineTo(x+(escala*multiplicador)-20,y+xLocal-30);
    
    dashGeral.closePath();
    dashGeral.fill();
    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#000000';
    //dashGeral.rotate(20 * Math.PI / 180);
    dashGeral.font = '60px Georgia';
    dashGeral.fillText(valor, x+(escala*multiplicador)-60, y+xLocal-(formula/colunaLocal)*valor-100);
    
    dashGeral.fill();
    //dashGeral.rotate(-20 * Math.PI / 180);
    }
    
    barraLocal(valor1,4);
    barraLocal(valor2,8);
    barraLocal(valor3,12);
    barraLocal(valor4,16);
    barraLocal(valor5,20);
    barraLocal(valor6,24);
    barraLocal(valor7,28);
    barraLocal(valor8,32);


    
    };
    
    
    // ______________________________ U5 - Carracci 753825

    function titulo(){
    
    dashGeral.beginPath();
    
    //dashGeral.rotate(20 * Math.PI / 180);
    dashGeral.font = '300px Gilda Display, serif';
    dashGeral.fillStyle = '#000000';
    dashGeral.fillText('Samambaia - DF', 200,1200);
    
    dashGeral.font = '80px Gilda Display, serif';
    dashGeral.fillStyle = '#115967';
    dashGeral.fillText('A região administrativa de Santa Maria tem como Padroeira a', 220,1400);
    dashGeral.fillText('Santa Mãe de Deus, com data de culto público em 1º de janeiro,', 220,1500);
     dashGeral.fillText('sendo ponto facultativo na região administrativa.', 220,1600);
    
    dashGeral.fill();
        
    };
    function oiticica001(){
    

    
        
        
        function objeto1(x,y){
    /*dashGeral.beginPath();
    dashGeral.globalAlpha = 0.7;
    dashGeral.lineWidth = 4;
    dashGeral.strokeStyle = '#cccccc'; 
        dashGeral.strokeRect(x+100,y+150,400,1300);*/
        //dashGeral.strokeRect(230,150,2430,1300);
       
    
        /*dashGeral.beginPath();
    dashGeral.globalAlpha = 1;
    dashGeral.fillStyle = '#dfdfdf';
        dashGeral.fillRect(0,150,3000,1300);*/


        //dashGeral.fillRect(400,150,2050,1300);
        
        
        
        dashGeral.beginPath();
    dashGeral.globalAlpha = 1;
    dashGeral.fillStyle = '#e0aa2c';
    dashGeral.moveTo(x+1450,y+620);
    dashGeral.lineTo(x+1880,y+470);
    dashGeral.lineTo(x+1680,y+1140);
    dashGeral.lineTo(x+1280,y+1180);
    dashGeral.closePath();
        dashGeral.fill();
        
        
        
        
    
    /*    dashGeral.beginPath();
    dashGeral.shadowColor = '#ba6e23';
    dashGeral.shadowBlur = 36;
    dashGeral.shadowOffsetX = 16;
    dashGeral.shadowOffsetY = 6;
    dashGeral.globalAlpha = 1;
    dashGeral.fillStyle = '#e0aa2c';
    dashGeral.moveTo(970,870);
    dashGeral.lineTo(1250,500);
    dashGeral.lineTo(1410,590);
    dashGeral.lineTo(1830,460);
    dashGeral.lineTo(1290,1100);
    dashGeral.closePath();
        dashGeral.fill();*/
        
        dashGeral.beginPath();
        
    dashGeral.shadowColor = '#ba6e23';
    dashGeral.shadowBlur = 36;
    dashGeral.shadowOffsetX = 16;
    dashGeral.shadowOffsetY = 6;
    dashGeral.globalAlpha = 0.5;
    dashGeral.fillStyle = '#ac701c';
    dashGeral.moveTo(x+970,y+870);
    dashGeral.lineTo(x+1250,y+500);
    dashGeral.lineTo(x+1410,y+590);
    dashGeral.lineTo(x+1840,y+540);
    dashGeral.lineTo(x+1290,y+1100);
    dashGeral.closePath();
        dashGeral.fill();
    dashGeral.shadowBlur = 0;
    dashGeral.shadowOffsetX = 0;
    dashGeral.shadowOffsetY = 0;
        
        
        
        
        dashGeral.beginPath();
    dashGeral.globalAlpha = 1;
    dashGeral.fillStyle = '#e0aa2c';
    dashGeral.moveTo(x+970,y+870);
    dashGeral.lineTo(x+1250,y+500);
    dashGeral.lineTo(x+1410,y+590);
    dashGeral.lineTo(x+1830,y+460);
    dashGeral.lineTo(x+1290,y+1100);
    dashGeral.closePath();
        dashGeral.fill();
        
        dashGeral.beginPath();
    dashGeral.globalAlpha = 1;
    dashGeral.fillStyle = '#ac701c';
    dashGeral.moveTo(x+1880,y+470);
    dashGeral.lineTo(x+1680,y+1140);
    dashGeral.lineTo(x+1720,y+1130);
    dashGeral.closePath();
        dashGeral.fill();
    
    dashGeral.beginPath();
    dashGeral.globalAlpha = 1;
    dashGeral.fillStyle = '#cbb725';
    dashGeral.moveTo(x+1700,y+1080);
    dashGeral.lineTo(x+1680,y+1140);
    dashGeral.lineTo(x+1720,y+1130);
    dashGeral.closePath();
        dashGeral.fill();
    
    
    dashGeral.beginPath();
    dashGeral.globalAlpha = 1;
    dashGeral.lineWidth = 4;
    dashGeral.strokeStyle = '#fdd334';
    dashGeral.moveTo(x+1880,y+470);
    dashGeral.lineTo(x+1680,y+1140);
        dashGeral.stroke();
        
        
        
        dashGeral.beginPath();
    dashGeral.globalAlpha = 1;
    dashGeral.lineWidth = 4;
    dashGeral.fillStyle = '#fdd334';
    dashGeral.moveTo(x+1250,y+500);
    dashGeral.lineTo(x+1410,y+590);
    dashGeral.lineTo(x+1440,y+580);
    dashGeral.closePath();
        dashGeral.fill();
}





objeto1(1700,300);


}
    
    // ______________________________ Carracci 753825

    function carracci(){
    
    function viga(x1,y1,x2,y2,x3,y3,x4,y4,cor,alfa){
    dashGeral.beginPath();
    dashGeral.globalAlpha = alfa;
    dashGeral.fillStyle = cor;
    dashGeral.moveTo(x1,y1);
    dashGeral.lineTo(x2,y2);
    dashGeral.lineTo(x3,y3);
    dashGeral.lineTo(x4,y4);
    dashGeral.fill();
    }
    //dashGeral.arc(4000,1700,500,0,2*Math.PI,true);
    
        viga(0,0,4000,0,4000,180,0,170,'#67473a',0.3);
        viga(0,0,2000,0,2000,180,0,170,'#251c17',0.6);
        viga(2600,0,2750,0,2750,180,0,170,'#914336',0.4);
        
    var x = 500;
    var y = 1500;
    dashGeral.beginPath();
    dashGeral.fillStyle = '#ffd700';
    dashGeral.moveTo(x,y);
    dashGeral.quadraticCurveTo(x+(escala*2),natAcre,x+(escala*2), y);
    dashGeral.lineTo(x+(escala*2),y);
    dashGeral.quadraticCurveTo(x+(escala*4),natAlagoas,x+(escala*4), y);
    dashGeral.lineTo(x+(escala*4),y);
    dashGeral.quadraticCurveTo(x+(escala*6),natAmapa,x+(escala*6), y);
    dashGeral.lineTo(x+(escala*6),y);
    dashGeral.quadraticCurveTo(x+(escala*8),natAmazonas,x+(escala*8), y);
    dashGeral.lineTo(x+(escala*8),y);
    
    
    dashGeral.closePath();
    dashGeral.fill();
    //natAcre,natAlagoas,natAmapa,natAmazonas
    };
    
    
    /*function naturalidade(){
    
    function barra(x,multiplicador,nat,nome,cor){
    //dashGeral.rotate(10 * Math.PI / 180);
        dashGeral.beginPath();
        dashGeral.fillStyle = cor;
        dashGeral.fillRect(1100,x+multiplicador,-nat/30,30);
        
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = cor;
        dashGeral.fillText(nome,1150, x+multiplicador+50);
        dashGeral.fill();
        
        dashGeral.beginPath();
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = cor;
        dashGeral.fillText((nat).toLocaleString('pt-BR'),920-(nat/30), x+multiplicador+50);
        dashGeral.fill();
        
    }
    
    var xBarra = -50;
        var espEntre = 55;
        barra(xBarra,1*espEntre,natAcre,'AC','#696969');
        barra(xBarra,2*espEntre,natAlagoas,'AL','#000ff0');
        barra(xBarra,3*espEntre,natAmapa,'AP','#c7a9c3');
        barra(xBarra,4*espEntre,natBahia,'BA','#b63c3c');
        barra(xBarra,5*espEntre,natCeara,'CE','#236698');
        barra(xBarra,6*espEntre,natEspiritoSanto,'ES','#0a494b');
        barra(xBarra,7*espEntre,natGoias,'GO','#800033');
        barra(xBarra,8*espEntre,natMaranhao,'MA','#00a5bd');
        barra(xBarra,9*espEntre,natMatoGrosso,'MT','#00e5d4');
        barra(xBarra,10*espEntre,natMatoGrossoDoSul,'MS','#696969');
        barra(xBarra,11*espEntre,natMinasGerais,'MG','#000ff0');
        barra(xBarra,12*espEntre,natPara,'PA','#c7a9c3');
        barra(xBarra,13*espEntre,natParaiba,'PB','#b63c3c');
        barra(xBarra,14*espEntre,natParana,'PR','#236698');
        barra(xBarra,15*espEntre,natPernambuco,'PE','#0a494b');
        barra(xBarra,16*espEntre,natPiaui,'PI','#800033');
        barra(xBarra,17*espEntre,natRioDeJaneiro,'RJ','#00a5bd');
        barra(xBarra,18*espEntre,natRioGrandeDoNorte,'RN','#00e5d4');
        barra(xBarra,19*espEntre,natRioGrandeDoSul,'RS','#696969');
        barra(xBarra,20*espEntre,natRondonia,'RO','#000ff0');
        barra(xBarra,21*espEntre,natRoraima,'RR','#c7a9c3');
        barra(xBarra,22*espEntre,natSantaCatarina,'SC','#b63c3c');
        barra(xBarra,23*espEntre,natSaoPaulo,'SP','#236698');
        barra(xBarra,24*espEntre,natSergipe,'SE','#0a494b');
        barra(xBarra,25*espEntre,natTocantins,'TO','#800033');
        //barra(xBarra,26*espEntre,natExterior,'EX');
        //barra(xBarra,27*espEntre,natNaoSabe,'NS');*/
        
        
        /*var arrayEstados = ['nat','natAcre','natAlagoas','natAmapa','natAmazonas','natBahia','natCeara','natEspiritoSanto','natGoias','natMaranhao','natMatoGrosso','natMatoGrossoDoSul','natMinasGerais','natPara','natParaiba','natParana','natPernambuco','natPiaui','natRioDeJaneiro','natRioGrandeDoNorte','natRioGrandeDoSul','natRondonia','natRoraima','natSantaCatarina','natSaoPaulo','natSergipe','natTocantins','natExterior','natNaoSabe'];
        
        if(i = 1; i < 29; i++){
        barra(200,i,arrayEstados[1]);
        
        
    }
    }*/
    
    
    function naturalidade(){
    
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
        barra(xBarra,y,4*espEntre,natBahia,'BA');
        barra(xBarra,y,5*espEntre,natCeara,'CE');
        barra(xBarra,y,6*espEntre,natEspiritoSanto,'ES');
        barra(xBarra,y,7*espEntre,natGoias,'GO');
        barra(xBarra,y,8*espEntre,natMaranhao,'MA');
        barra(xBarra,y,9*espEntre,natMatoGrosso,'MT');
        
        var y  = 200;
        barra(xBarra,y,1*espEntre,natMatoGrossoDoSul,'MS');
        barra(xBarra,y,2*espEntre,natMinasGerais,'MG');
        barra(xBarra,y,3*espEntre,natPara,'PA');
        barra(xBarra,y,4*espEntre,natParaiba,'PB');
        barra(xBarra,y,5*espEntre,natParana,'PR');
        barra(xBarra,y,6*espEntre,natPernambuco,'PE');
        barra(xBarra,y,7*espEntre,natPiaui,'PI');
        barra(xBarra,y,8*espEntre,natRioDeJaneiro,'RJ');
        barra(xBarra,y,9*espEntre,natRioGrandeDoNorte,'RN');
        
        var y  = 700;
        barra(xBarra,y,1*espEntre,natRioGrandeDoSul,'RS');
        barra(xBarra,y,2*espEntre,natRondonia,'RO');
        barra(xBarra,y,3*espEntre,natRoraima,'RR');
        barra(xBarra,y,4*espEntre,natSantaCatarina,'SC');
        barra(xBarra,y,5*espEntre,natSaoPaulo,'SP');
        barra(xBarra,y,6*espEntre,natSergipe,'SE');
        barra(xBarra,y,7*espEntre,natTocantins,'TO');
        barra(xBarra,y,8*espEntre,natExterior,'EX');
        barra(xBarra,y,9*espEntre,natNaoSabe,'NS');
        
        

    };
    
    $pizza;
    $corda;
    
    

function idades(){
var coeficiente = 110;

        dashGeral.beginPath();
        dashGeral.fillStyle = '#00cfd4';
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.lineWidth = 6;
        dashGeral.moveTo(100,1200);
        dashGeral.lineTo(1900,1200);
        dashGeral.lineTo(2000,1600);
        dashGeral.lineTo(0,1600);
        dashGeral.closePath();
        dashGeral.stroke();
        
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#ce881d';
        dashGeral.fillRect(100,1300,300,-popCriancas/coeficiente);
        dashGeral.fillStyle = '#000000';
        dashGeral.fillRect(100,1300-popCriancas/coeficiente,300,50);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '80px Roboto, sans-serif';
        dashGeral.fillStyle = '#808080';
        dashGeral.fillText((popCriancas).toLocaleString('pt-BR'), 100,1200-popCriancas/coeficiente);
        dashGeral.fillText('Crianças', 100,1460);
        dashGeral.fill();

        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#c7a9c3';
        dashGeral.fillRect(600,1300,300,-popJovens/coeficiente);
        dashGeral.fillStyle = '#000000';
        dashGeral.fillRect(600,1300-popJovens/coeficiente,300,50);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '80px Roboto, sans-serif';
        dashGeral.fillStyle = '#808080';
        dashGeral.fillText((popJovens).toLocaleString('pt-BR'), 600,1200-popJovens/coeficiente);
        dashGeral.fillText('Jovens', 600,1460);
        dashGeral.fill();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#b63c3c';
        dashGeral.fillRect(1100,1300,300,-popAdultos/coeficiente);
        dashGeral.fillStyle = '#000000';
        dashGeral.fillRect(1100,1300-popAdultos/coeficiente,300,50);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '80px Roboto, sans-serif';
        dashGeral.fillStyle = '#808080';
        dashGeral.fillText((popAdultos).toLocaleString('pt-BR'), 1100,1200-popAdultos/coeficiente);
        dashGeral.fillText('Adultos', 1100,1460);
        dashGeral.fill();
        
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#236698';
        dashGeral.fillRect(1600,1300,300,-popIdosos/coeficiente);
        dashGeral.fillStyle = '#000000';
        dashGeral.fillRect(1600,1300-popIdosos/coeficiente,300,50);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '80px Roboto, sans-serif';
        dashGeral.fillStyle = '#808080';
        dashGeral.fillText((popIdosos).toLocaleString('pt-BR'), 1600,1200-popIdosos/coeficiente);
        dashGeral.fillText('Idosos', 1600,1460);
        dashGeral.fill();
        
        
        
    }
    
    
    if(tipo == 1){
    pizza(700,600,transOnibus,transAutomovel,transUtilitario,transMetro,transMotocicleta,transBicicleta,transAPe,transOutros);
    
    }else if(tipo == 2){
        idades();
    }else if(tipo == 3){
        naturalidade();
    }else if(tipo == 4){
        pizza(700,700,transOnibus,transAutomovel,transUtilitario,transMetro,transMotocicleta,transBicicleta,transAPe,transOutros);
    }else if(tipo == 5){
        u1();
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


<?php $grafo20 = "function barraD(){
    
    var exibir = document.getElementById('dashboardGeral21');
    var dashGeral = exibir.getContext('2d');
    
    dashGeral.globalAlpha = 1;

    
    dashGeral.beginPath();
    dashGeral.fillStyle = '#071739';
    dashGeral.fillRect(0,0,500,500);
}"; 

?>
    
    <?php $coordenadas = "-15.7935,-47.8783"?>