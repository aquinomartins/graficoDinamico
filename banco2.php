<?php
include("conexao.php");


$sqlBanco = "SELECT * FROM investimentosFAC WHERE id IN (1);";
$resultBanco = $con->query($sqlBanco);


while ($tblBanco = $resultBanco->fetch_assoc())
            {
                
                $CodigoBanco = $tblBanco["id"];
                
                $ano2006 = $tblBanco["2006"];
                $ano2007 = $tblBanco["2007"];
                $ano2008 = $tblBanco["2008"];
                $ano2009 = $tblBanco["2009"];
                $ano2010 = $tblBanco["2010"];
                $ano2011 = $tblBanco["2011"];
                $ano2012 = $tblBanco["2012"];
                $ano2013 = $tblBanco["2013"];
                $ano2014 = $tblBanco["2014"];
                $ano2015 = $tblBanco["2015"];
                $ano2016 = $tblBanco["2016"];
                $ano2017 = $tblBanco["2017"];
                $ano2018 = $tblBanco["2018"];
                
                
                
            }
                

            ?>