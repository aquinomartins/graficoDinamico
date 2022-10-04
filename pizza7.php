<?php
$pizza8 = "function pizza8(x,y,titulo,ajusteTitulo,angulo1,angulo2,angulo3,angulo4,angulo5,angulo6,angulo7,angulo8,porcentagem){

        var total = angulo1 + angulo2 + angulo3 + angulo4 + angulo5 + angulo6 + angulo7 + angulo8;
        
        var calculoAngulo1 = (angulo1*360)/total;
        var calculoAngulo2 = (angulo2*360)/total;
        var calculoAngulo3 = (angulo3*360)/total;
        var calculoAngulo4 = (angulo4*360)/total;
        var calculoAngulo5 = (angulo5*360)/total;
        var calculoAngulo6 = (angulo6*360)/total;
        var calculoAngulo7 = (angulo7*360)/total;
        var calculoAngulo8 = (angulo8*360)/total;
        
        
        //dashGeral.ellipse(x+100,y+50,250-zoomCirculo,250,0,2*Math.PI,true);
        //dashGeral.ellipse(x+100,y+50,200-zoomCirculo,200,0,2*Math.PI,false);
        
        var zoomCirculo = 50;
        
        
        
        
        
//-------------------------------------- angulo1
        
        dashGeral.beginPath();
        
        dashGeral.lineWidth = 4;
        dashGeral.strokeStyle = '#000ff0';
        dashGeral.fillStyle = '#ce881d';
        //dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,0,-Math.PI/(180/(calculoAngulo1)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/calculoAngulo1),0,false);
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '90px Roboto, sans-serif';
        dashGeral.fillStyle = '#b63c3c';
        dashGeral.fillText(porcentagem, x-75,y+10);
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#b63c3c';
        dashGeral.fillText('%', x+30,y+10);
        dashGeral.fill();
        
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = 'bold 40px Roboto, sans-serif';
        dashGeral.fillStyle = '#808080';
        dashGeral.fillText(titulo, x-130+ajusteTitulo,y+280);

        dashGeral.fill();
        
        
        
//-------------------------------------- angulo2


        
        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#c7a9c3';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,-Math.PI/(180/calculoAngulo1),-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),-Math.PI/(180/calculoAngulo1),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
       
        
//-------------------------------------- angulo3
        
        
        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#b63c3c';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
//-------------------------------------- angulo4
        
        
        
        
        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#236698';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
//-------------------------------------- angulo5


        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#0a494b';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
//-------------------------------------- angulo6


        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#800033';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
        
//-------------------------------------- angulo7

        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#00a5bd';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
//-------------------------------------- angulo8


        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#00e5d4';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,250-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+calculoAngulo8)),true);
        dashGeral.arc(x,y,180-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+calculoAngulo8)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
        
    
        
        
//-------------------------------------

        
        
    }";
    


    ?>