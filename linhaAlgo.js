function graficoLinha(){
    
    var exibirLinha = document.getElementById("algo");
    var desenhoLinha = exibirLinha.getContext("2d");
    
    desenhoLinha.globalAlpha = 1;
    
    //desenhoLinha.clearRect(0,0,500,500);
    
    desenhoLinha.beginPath();
    desenhoLinha.fillStyle = "#ff0000";
    desenhoLinha.fillRect(0,0,1400,1400);
    desenhoLinha.fill();
    
}
graficoLinha();