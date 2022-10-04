<?php
$pizza = "function pizza(x,y,angulo1,angulo2,angulo3,angulo4,angulo5,angulo6,angulo7,angulo8){

        var total = angulo1 + angulo2 + angulo3 + angulo4 + angulo5 + angulo6 + angulo7 + angulo8;
        
        var calculoAngulo1 = (angulo1*360)/total;
        var calculoAngulo2 = (angulo2*360)/total;
        var calculoAngulo3 = (angulo3*360)/total;
        var calculoAngulo4 = (angulo4*360)/total;
        var calculoAngulo5 = (angulo5*360)/total;
        var calculoAngulo6 = (angulo6*360)/total;
        var calculoAngulo7 = (angulo7*360)/total;
        var calculoAngulo8 = (angulo8*360)/total;
        
        
        var zoomCirculo = 50;
        
//-------------------------------------- angulo1
        dashGeral.beginPath();
        
        dashGeral.lineWidth = 4;
        dashGeral.strokeStyle = '#000ff0';
        dashGeral.fillStyle = '#ce881d';
        //dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,0,-Math.PI/(180/(calculoAngulo1)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/calculoAngulo1),0,false);
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        
        dashGeral.beginPath();
        dashGeral.lineWidth = 7;
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.arc(x,y,520-zoomCirculo,-Math.PI/(180/(calculoAngulo1/2)),-Math.PI/(180/(calculoAngulo1/2)));
        dashGeral.arc(x,y,550-zoomCirculo,-Math.PI/(180/(calculoAngulo1/2)),-Math.PI/(180/(calculoAngulo1/2)));
        dashGeral.lineTo(x+520,y-470);
        dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#ce881d';
        dashGeral.fillText((angulo1).toLocaleString('pt-BR'), x+500,y-400);
        dashGeral.fill();
        

        
//-------------------------------------- angulo2

        dashGeral.beginPath();
        dashGeral.fillStyle = '#c7a9c3';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/calculoAngulo1),-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),-Math.PI/(180/calculoAngulo1),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        //dashGeral.beginPath();
        //dashGeral.lineWidth = 10;
        //dashGeral.moveTo(500-zoomCirculo,300*Math.PI/(180/calculoAngulo1));
        //dashGeral.lineTo(500-zoomCirculo,-Math.PI/(180/calculoAngulo1)-200)
        //dashGeral.stroke();
        
        
       dashGeral.beginPath();
        dashGeral.lineWidth = 7;
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.arc(x,y,520-zoomCirculo,-Math.PI/(180/(calculoAngulo1/2)+(calculoAngulo2-(calculoAngulo2/2))),-Math.PI/(180/(calculoAngulo1/2)+(calculoAngulo2+(calculoAngulo2/2))));
        dashGeral.arc(x,y,550-zoomCirculo,-Math.PI/(180/(calculoAngulo1/2)+(calculoAngulo2-(calculoAngulo2/2))),-Math.PI/(180/(calculoAngulo1/2)+(calculoAngulo2+(calculoAngulo2/2))));
        dashGeral.lineTo(x-520,y-470);
        dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#c7a9c3';
        dashGeral.fillText((angulo2).toLocaleString('pt-BR'), x-500,y-400);
        dashGeral.fill();
        
        
        
    
        
//-------------------------------------- angulo3
        dashGeral.beginPath();
        dashGeral.fillStyle = '#b63c3c';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        dashGeral.beginPath();
        dashGeral.lineWidth = 7;
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.arc(x,y,520-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3-(calculoAngulo3/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+(calculoAngulo3/2))));
        dashGeral.arc(x,y,550-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3-(calculoAngulo3/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+(calculoAngulo3/2))));
        dashGeral.lineTo(x-120,y+600);
        dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#b63c3c';
        dashGeral.fillText((angulo3).toLocaleString('pt-BR'), x-100,y+670);
        dashGeral.fill();
        
        
        
        
//-------------------------------------- angulo4
        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#236698';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        dashGeral.beginPath();
        dashGeral.lineWidth = 7;
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.arc(x,y,520-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4-(calculoAngulo4/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+(calculoAngulo4/2))));
        dashGeral.arc(x,y,550-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4-(calculoAngulo4/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+(calculoAngulo4/2))));
        dashGeral.lineTo(x+320,y+600);
        dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#236698';
        dashGeral.fillText((angulo4).toLocaleString('pt-BR'), x+300,y+670);
        dashGeral.fill();
        
//-------------------------------------- angulo5


        dashGeral.beginPath();
        dashGeral.fillStyle = '#0a494b';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        
        dashGeral.beginPath();
        dashGeral.lineWidth = 7;
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.arc(x,y,520-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5-(calculoAngulo5/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+(calculoAngulo5/2))));
        dashGeral.arc(x,y,550-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5-(calculoAngulo5/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+(calculoAngulo5/2))));
        dashGeral.lineTo(x+520,y+600);
        dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#0a494b';
        dashGeral.fillText((angulo5).toLocaleString('pt-BR'), x+500,y+670);
        dashGeral.fill();
        
//-------------------------------------- angulo6


        dashGeral.beginPath();
        dashGeral.fillStyle = '#800033';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
//-------------------------------------- angulo7


        dashGeral.beginPath();
        dashGeral.fillStyle = '#00a5bd';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
//-------------------------------------- angulo8


        dashGeral.beginPath();
        dashGeral.fillStyle = '#00e5d4';
        dashGeral.moveTo(x,y);
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+calculoAngulo8)),true);
        dashGeral.arc(x,y,300-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+calculoAngulo8)),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7)),false);
        dashGeral.closePath();
        dashGeral.fill();
        //dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.lineWidth = 7;
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.arc(x,y,520-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+calculoAngulo8-(calculoAngulo8/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+(calculoAngulo8/2))),false);
        dashGeral.arc(x,y,550-zoomCirculo,-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+calculoAngulo8-(calculoAngulo8/2))),-Math.PI/(180/(calculoAngulo1+calculoAngulo2+calculoAngulo3+calculoAngulo4+calculoAngulo5+calculoAngulo6+calculoAngulo7+(calculoAngulo8/2))),false);
        dashGeral.lineTo(x+520,y+300);
        dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#00e5d4';
        dashGeral.fillText((angulo8).toLocaleString('pt-BR'), x+500,y+370);
        dashGeral.fill();
        
        
    
        
        /*var raio = 400-zoomCirculo;
        var graus = 60;
        var radiano = graus * (Math.PI/180);
        var radiano2 = (graus*2) * (Math.PI/180);
        var radiano3 = (graus*3) * (Math.PI/180);
        
        dashGeral.beginPath();
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.moveTo(100,400);
        dashGeral.lineTo(x+(raio*Math.cos(radiano)),y+(raio*Math.sin(radiano)));
        dashGeral.stroke();
        
        
        dashGeral.beginPath();
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.moveTo(100,400);
        dashGeral.lineTo(x+(raio*Math.cos(radiano2)),y+(raio*Math.sin(radiano2)));
        dashGeral.stroke();
        
        
         dashGeral.beginPath();
        dashGeral.strokeStyle = '#dcdcdc';
        dashGeral.moveTo(100,400);
        dashGeral.lineTo(x+(raio*Math.cos(radiano3)),y+(raio*Math.sin(radiano3)));
        dashGeral.stroke();*/
        
        
        
    }";
    

    
    
/*    function arco(x,y){
    
    dashGeral.beginPath();
    dashGeral.globalAlpha = 0.5;
    dashGeral.lineWidth = 1;
    dashGeral.fillStyle = "#ffd700";
    dashGeral.strokeStyle = "#ffffff";
    dashGeral.arc(760+x,150+y,70,0*Math.PI,1.5*Math.PI);
    dashGeral.arc(760+x,150+y,40,1.5*Math.PI,0*Math.PI,true);
    dashGeral.closePath();
    dashGeral.fill();
    
    dashGeral.beginPath();
    dashGeral.globalAlpha = 0.5;
    dashGeral.lineWidth = 1;
    dashGeral.fillStyle = "#ff0000";
    dashGeral.strokeStyle = "#ffffff";
    dashGeral.arc(760+x,150+y,70,0,Math.PI/4,true);
    dashGeral.arc(760+x,150+y,40,Math.PI/4,0,false);
    dashGeral.closePath();
    dashGeral.fill();
    
    //dashGeral.stroke();
}*/

    ?>