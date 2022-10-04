

<?php
$q = intval($_GET['q']);
$u = intval($_GET['u']);

$servidor = 'localhost:3306'; #nome DNS ou IP do seu servidor HTTP
$usuario = 'dashboar_aquino'; #nome do usuário para acesso no MySQL
$senha = 'HzDzWjFouc57'; #senha de acesso
$banco = 'dashboar_dlivre'; #nome do banco de dados

$con = mysqli_connect($servidor,$usuario,$senha,$banco);


if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM infografia WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $cod1 = $row['grafico1'];
    echo " ";
    echo $cod1 = $row['grafico2'];
    echo " ";
    echo $cod1 = $row['grafico3'];

}



mysqli_close($con);
?>







<?php
$q = intval($_GET['q']);
$u = intval($_GET['u']);



$con = mysqli_connect('localhost:3306','dashboar_aquino','HzDzWjFouc57','dashboar_dlivre');


if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM infografia WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo $cod1 = $row['grafico1'];
    echo " ";
    echo $cod2 = $row['grafico2'];
    echo " ";
    echo $cod3 = $row['grafico3'];

}



mysqli_close($con);
?>





