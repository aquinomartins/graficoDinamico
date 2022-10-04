<?php
$corda = "function corda(angulo1,angulo2){
    

        dashGeral.beginPath();
        
        dashGeral.lineWidth = 4;
        dashGeral.strokeStyle = '#000ff0';
        dashGeral.fillStyle = '#efaa52';
        dashGeral.moveTo(100,1000);
        dashGeral.arc(100,1000,400,0,-Math.PI/(180/angulo1),true);
        dashGeral.fill();
        dashGeral.stroke();
        dashGeral.beginPath();
        dashGeral.fillStyle = '#ff0000';
        dashGeral.moveTo(100,1000);
        dashGeral.arc(100,1000,400,-Math.PI/(180/angulo1),-Math.PI/(180/(angulo1+angulo2)),true);
        dashGeral.closePath();
        dashGeral.fill();
        dashGeral.stroke();
        
        
        
        
        
        dashGeral.lineWidth = 2;
        dashGeral.strokeStyle = '#cccccc';
        dashGeral.fillStyle = '#00f0f0';
        
        
        
        
        function circulo(graus){
            dashGeral.fillStyle = '#236698';
        var raio = 600;
        var radiano = graus * (Math.PI/180);
        var radiano2 = (graus*2) * (Math.PI/180);
        var radiano3 = (graus*3) * (Math.PI/180);
        
        dashGeral.beginPath();
        dashGeral.arc(700+(raio*Math.cos(radiano)),70+(raio*Math.sin(radiano)),10,0,2*Math.PI,true);
        
        dashGeral.globalAlpha = 0.1;
        dashGeral.lineTo(700+(raio*Math.cos(radiano3)),700+(raio*Math.sin(radiano3)));
        dashGeral.lineTo(700+(raio*Math.cos(radiano2)),700+(raio*Math.sin(radiano2)));
        dashGeral.fill();
        dashGeral.globalAlpha = 1;
        
        dashGeral.beginPath();
        dashGeral.fillStyle = '#a22a19';
        dashGeral.fillRect(700+(raio*Math.cos(radiano)),700+(raio*Math.sin(radiano)),10,10);
        //dashGeral.arc(700+(raio*Math.cos(radiano)),700+(raio*Math.sin(radiano)),10,0,2*Math.PI,true);
        dashGeral.fill();
        
            
        }
        
        
        function estrutura(){
            dashGeral.beginPath();
        dashGeral.globalAlpha = 0.1;
        dashGeral.fillStyle = '#ce881d';
        dashGeral.fillRect(0,450,1400,250);
        
        dashGeral.globalAlpha = 0.1;
        dashGeral.beginPath();
        dashGeral.fillStyle = '#c7a9c3';
        dashGeral.fillRect(600,450,800,-200);
        
        dashGeral.globalAlpha = 0.1;
        dashGeral.beginPath();
        dashGeral.fillStyle = '#b63c3c';
        dashGeral.fillRect(1200,100,200,700);
        }
        
        
        function estrutura2(a){
            dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.fillStyle = '#ce881d';
        dashGeral.fillRect(50*a,400,20,200);
        
        
        }
        
        
        
        
        function cordas(graus,graus2,varia){
        
        dashGeral.lineWidth = 3;
        dashGeral.strokeStyle = '#fbec5d';
        var raio = 600;
        var radiano = graus * (Math.PI/180);
        var radiano2 = graus2 * (Math.PI/180);
        
           dashGeral.beginPath();
           
            dashGeral.moveTo(2000+(raio*Math.cos(radiano)),900+(raio*Math.sin(radiano)));
            
            dashGeral.quadraticCurveTo(1500+varia, 1000+varia, 2000+(raio*Math.cos(radiano2)),900+(raio*Math.sin(radiano2)));


           //dashGeral.moveTo(2000+(raio*Math.cos(radiano)),900+(raio*Math.sin(radiano)));
           //dashGeral.lineTo(2000+(raio*Math.cos(radiano2)),900+(raio*Math.sin(radiano2)));
        //dashGeral.arc(2000+(raio*Math.cos(radiano)),900+(raio*Math.sin(radiano)),10,0,2*Math.PI,true);
        
            dashGeral.stroke();
            
        
        }
        
        
        
        
        
        function textoGraus(){
        var raio = 600;
        var radiano = 10 * (Math.PI/180);
        dashGeral.globalAlpha = 0.5;
        dashGeral.fillStyle = '#afd2a9';
            dashGeral.beginPath();
            dashGeral.rotate(1 * Math.PI / 180);
            dashGeral.font = '70px  Roboto, sans-serif';
            dashGeral.fillText('Plano Piloto', 2100+(raio*Math.cos(radiano)),760+(raio*Math.sin(radiano)));
            dashGeral.fill();
            dashGeral.rotate(-1 * Math.PI / 180);
            
            dashGeral.beginPath();
            dashGeral.rotate(-10 * Math.PI / 180);
            dashGeral.font = '50px Roboto, sans-serif';
            dashGeral.fillText('Gama', 1900+(raio*Math.cos(radiano)),1135+(raio*Math.sin(radiano)));
            dashGeral.fill();
            dashGeral.rotate(10 * Math.PI / 180);
            
            dashGeral.beginPath();
            dashGeral.rotate(-20 * Math.PI / 180);
            dashGeral.font = '50px Roboto, sans-serif';
            dashGeral.fillText('Taguatinga', 1665+(raio*Math.cos(radiano)),1435+(raio*Math.sin(radiano)));
            dashGeral.fill();
            dashGeral.rotate(20 * Math.PI / 180);
            
            
            
            
            
            
            var total = angulo1 + angulo2 + angulo3 + angulo4 + angulo5 + angulo6 + angulo7 + angulo8;
        
        var calculoAngulo1 = (angulo1*360)/total;
        var calculoAngulo2 = (angulo2*360)/total;
        var calculoAngulo3 = (angulo3*360)/total;
        var calculoAngulo4 = (angulo4*360)/total;
        var calculoAngulo5 = (angulo5*360)/total;
        var calculoAngulo6 = (angulo6*360)/total;
        var calculoAngulo7 = (angulo7*360)/total;
        var calculoAngulo8 = (angulo8*360)/total;
        
        
        //dashGeral.ellipse(x+100,y+50,500-zoomCirculo,500,0,2*Math.PI,true);
        //dashGeral.ellipse(x+100,y+50,200-zoomCirculo,200,0,2*Math.PI,false);
        
        var zoomCirculo = 50;
        
        
            function pizza8(x,y,angulo1,angulo2,angulo3,angulo4,angulo5,angulo6,angulo7,angulo8){
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
        dashGeral.arc(x,y,500-zoomCirculo,-Math.PI/(180/(calculoAngulo1/2)),-Math.PI/(180/(calculoAngulo1/2)));

        dashGeral.lineTo(x+420,y-470);
        dashGeral.stroke();
        
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#ce881d';
        dashGeral.fillText((angulo1).toLocaleString('pt-BR'), x+500,y-380);
        dashGeral.fill();
        
        dashGeral.beginPath();
        dashGeral.lineWidth = 7;
        dashGeral.fillRect(x+450,y-450,30,30);
 
        dashGeral.beginPath();
        dashGeral.globalAlpha = 1;
        dashGeral.font = '60px Roboto, sans-serif';
        dashGeral.fillStyle = '#ce881d';
        dashGeral.fillText('Ônibus', x+500,y-440);
        dashGeral.fill();
        
        
//-------------------------------------- 
            }
            
            
        

        
        
            
dashGeral.globalAlpha = 1;
            
        }
        
        for(i = 1; i < 37; i++){
            circulo(i*10);
            estrutura2(i);
            
        }
        pizza8(200,200,30,54,6776,87,77,45,45,55);
        textoGraus();
        
        for(i=-10;i<10;i++){
        cordas(1,150,i*15);
        //estrutura();
        
        }
        
        
    }";
    
    //font-family: 'Roboto', sans-serif; font-family: 'Coiny', cursive;
    
    ?>