


function ponteira2(a,h){
    
    

var ponteira2 = document.getElementById("myCanvasy2");
var ptx2 = ponteira2.getContext("2d");

var img = document.getElementById("scream");
   //ptx2.drawImage(img, 0, 0); 
    
    
var grd2=ptx2.createLinearGradient(0,-220,170,500);
grd2.addColorStop(0,"green");
grd2.addColorStop(1,"black");

ptx2.fillStyle=grd2;



ptx2.clearRect(0,0,500,500);


function red(){
ptx2.globalAlpha = 1;

ptx2.beginPath();
ptx2.fillStyle = "#cc0033";
ptx2.moveTo(0,220);
ptx2.lineTo(70,220);
ptx2.lineTo(70,410);
ptx2.lineTo(0,410);
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#a20029";
ptx2.moveTo(70,220);
ptx2.lineTo(110,170);
ptx2.lineTo(110,450)
ptx2.lineTo(70,410);
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#cc0033";
ptx2.moveTo(110,170);
ptx2.lineTo(190,170);
ptx2.lineTo(190,450);
ptx2.lineTo(110,450)
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#a20029";
ptx2.moveTo(190,170);
ptx2.lineTo(230,130);
ptx2.lineTo(230,490);
ptx2.lineTo(190,450);
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#cc0033";
ptx2.moveTo(230,130);
ptx2.lineTo(380,130);
ptx2.lineTo(380,490);
ptx2.lineTo(230,490);
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#a20029";
ptx2.moveTo(380,130);
ptx2.lineTo(440,80);
ptx2.lineTo(440,530);
ptx2.lineTo(380,490);
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#cc0033";
ptx2.moveTo(440,80);
ptx2.lineTo(610,80);
ptx2.lineTo(610,530);
ptx2.lineTo(440,530);
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#a20029";
ptx2.moveTo(610,80);
ptx2.lineTo(690,0);
ptx2.lineTo(690,600);
ptx2.lineTo(610,530);
ptx2.closePath();
ptx2.fill();

ptx2.beginPath();
ptx2.fillStyle = "#cc0033";
ptx2.moveTo(690,0);
ptx2.lineTo(1000,0);
ptx2.lineTo(1000,600);
ptx2.lineTo(690,600);
ptx2.closePath();
ptx2.fill();

}


function cubo(a,x,y){
    
    ptx2.beginPath();
    ptx2.globalAlpha = a;
    ptx2.fillStyle = "#c1c1c1";
    ptx2.moveTo(x,y);
    ptx2.lineTo(x+100,y);
    ptx2.lineTo(x+100,y+100);
    ptx2.lineTo(x,y+100);

    ptx2.closePath();
    ptx2.fill();
    
    
}



ptx2.beginPath();
//ptx2.drawImage(img, 10, 10);
ptx2.globalAlpha = a;
ptx2.lineWidth = 70;
//ptx2.fillStyle = "#ff0000";
ptx2.strokeStyle = "#ffffff";
//ptx2.arc(A+1000,B+500,10,0,2*Math.PI,true);
ptx2.moveTo(200,200+h);
ptx2.lineTo(400+h,100+h);
ptx2.lineTo(600,200+h);
ptx2.lineTo(400,300+h);
ptx2.closePath();


//ptx2.arc(C+1000,D+500,10,0,2*Math.PI,true);
ptx2.fill();
ptx2.beginPath();
red();

cubo(0.5,100,100);
cubo(0.5,200,100);
cubo(0.5,300,100);
cubo(0.5,400,100);
cubo(0.5,500,100);
cubo(0.5,600,100);
cubo(0.5,700,100);
cubo(0.5,800,100);
cubo(0.5,900,100);
cubo(0.5,1000,100);

cubo(0.5,100,100);
cubo(0.5,200,200);
cubo(0.5,300,300);
cubo(0.5,400,400);
cubo(0.5,500,500);
cubo(0.5,600,600);
cubo(0.5,700,700);
cubo(0.5,800,800);
cubo(0.5,900,900);
cubo(0.5,1000,1000);



ptx2.beginPath();
ptx2.globalAlpha = 0.4;
ptx2.fillStyle = "#000000";
ptx2.font = "40px Noto Serif TC, serif";
ptx2.fillText("Análise",710,81);


ptx2.globalAlpha = 0.7;
ptx2.fillStyle = "#fcfcfc";
ptx2.fillText("Análise",712,80);


}



/*for(i=0; i < 10; i++){
    
ponteira2(0.05*i,17*i+o);

}*/


var o = 1;
setInterval(function(){

if(o < 12){
ponteira2(0.02*o,17*o);
cubo(0.5,100,o*2.9);
cubo(0.5,200+(o*3.5),100);

o++;
}else{}

},300);
/*var hyhy = hj;context.clearRect(0, 0, canvas.width, canvas.height);
setInterval(function(){
    ponteira(10,20,30,40,30,20,10);
}, 30);*/



