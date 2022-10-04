<?php
$naturalidade = "function naturalidade(natAcre,natAlagoas,natAmapa,natAmazonas,natBahia,natCeara,natEspiritoSanto,natGoias,natMaranhao,natMatoGrosso,natMatoGrossoDoSul,natMinasGerais,natPara,natParaiba,natParana,natPernambuco,natPiaui,natRioDeJaneiro,natRioGrandeDoNorte,natRioGrandeDoSul,natRondonia,natRoraima,natSantaCatarina,natSaoPaulo,natSergipe,natTocantins,natExterior,natNaoSabe,popCriancas,popJovens,popAdultos,popIdosos,transOnibus,transAutomovel,transUtilitario,transMetro,transMotocicleta,transBicicleta,transAPe,transOutros){
    
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
        
        

}";


$idades = "function idades(popCriancas,popJovens,popAdultos,popIdosos){
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
        
        
        
    }"; ?>
    


