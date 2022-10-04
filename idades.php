<?php
$idades = "function idades(){
var coeficiente = 110;


        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#670303';
        dashGeral.fillRect(100,1300,300,-popCriancas/coeficiente);
        dashGeral.globalAlpha = 0.4;
        dashGeral.fillRect(150,1350,300,-popCriancas/coeficiente);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '100px Roboto, sans-serif';
        dashGeral.fillStyle = '#000000';
        dashGeral.fillText((popCriancas).toLocaleString('pt-BR'), 100,1200-popCriancas/coeficiente);
        dashGeral.fillText('Crianças', 100,1460);
        dashGeral.fill();

        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#ac6613';
        dashGeral.fillRect(600,1300,300,-popJovens/coeficiente);
        dashGeral.globalAlpha = 0.4;
        dashGeral.fillRect(650,1350,300,-popJovens/coeficiente);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '100px Roboto, sans-serif';
        dashGeral.fillStyle = '#000000';
        dashGeral.fillText((popJovens).toLocaleString('pt-BR'), 600,1200-popJovens/coeficiente);
        dashGeral.fillText('Jovens', 600,1460);
        dashGeral.fill();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#d79f00';
        dashGeral.fillRect(1100,1300,300,-popAdultos/coeficiente);
        dashGeral.globalAlpha = 0.4;
        dashGeral.fillRect(1150,1350,300,-popAdultos/coeficiente);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '100px Roboto, sans-serif';
        dashGeral.fillStyle = '#000000';
        dashGeral.fillText((popAdultos).toLocaleString('pt-BR'), 1100,1200-popAdultos/coeficiente);
        dashGeral.fillText('Adultos', 1100,1460);
        dashGeral.fill();
        
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#133b48';
        dashGeral.fillRect(1600,1300,300,-popIdosos/coeficiente);
        dashGeral.globalAlpha = 0.4;
        dashGeral.fillRect(1650,1350,300,-popIdosos/coeficiente);
        dashGeral.globalAlpha = 1;
        dashGeral.font = '100px Roboto, sans-serif';
        dashGeral.fillStyle = '#000000';
        dashGeral.fillText((popIdosos).toLocaleString('pt-BR'), 1600,1200-popIdosos/coeficiente);
        dashGeral.fillText('Idosos', 1600,1460);
        dashGeral.fill();
        
    }";
    
    ?>