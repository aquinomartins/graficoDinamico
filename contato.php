<?php
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    // Conexao com o banco de dados
    



    $server = 'localhost:3306';
    $user = 'dashboar_aquino';
    $senha = 'HzDzWjFouc57';
    $base = 'dashboar_dlivre';
    $conexao = mysql_connect($server, $user, $senha) or die("Erro na conexão!");
    mysql_select_db($base);
    // Verifica se a variável está vazia
    if (empty($nome)) {
        $sql = "SELECT * FROM ras";
    } else {
        $nome .= "%";
        $sql = "SELECT * FROM ras WHERE id like '$nome'";
    }
    sleep(1);
    $result = mysql_query($sql);
    $cont = mysql_affected_rows($conexao);
    // Verifica se a consulta retornou linhas 
    if ($cont > 0) {
        // Atribui o código HTML para montar uma tabela
        $tabela = "<table border='1'>
                    <thead>
                        <tr>
                            <th>Crianças</th>
                            <th>Jovens</th>
                            <th>Adultos</th>
                            <th>Idosos</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>";
        $return = "$tabela";
        // Captura os dados da consulta e inseri na tabela HTML
        while ($linha = mysql_fetch_array($result)) {
            $return.= "<td>" . utf8_encode($linha["criancas"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["jovens"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["adultos"]) . "</td>";
            $return.= "<td>" . utf8_encode($linha["idosos"]) . "</td>";
            $return.= "</tr>";
        }
        echo $return.="</tbody></table>";
    } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "Não foram encontrados registros!";
    }
}
?>